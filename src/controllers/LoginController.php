<?php

declare(strict_types=1);

namespace App\Controller;

use App\Database;
use App\Repository\UserRepository;

final class LoginController extends AppController
{
    private const DUMMY_PASSWORD_HASH = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2uheWG/igi.';

    public function index(): void
    {
        if (isset($_SESSION['user_id'], $_SESSION['user_name'])) {
            $this->renderPage(
                authenticatedUserName: (string) $_SESSION['user_name'],
            );
            return;
        }

        $loginMessage = ($_GET['logged_out'] ?? '') === '1'
            ? 'You have been signed out.'
            : null;

        $this->renderPage(loginMessage: $loginMessage);
    }

    public function store(): void
    {
        $identifier = trim($this->postString('identifier'));
        $password = $this->postString('password');
        $csrfToken = $this->postString('csrfToken');

        if (!$this->isCsrfTokenValid($csrfToken)) {
            http_response_code(403);
            $this->renderPage(
                loginError: 'The form has expired. Refresh the page and try again.',
                loginIdentifier: $identifier,
            );
            return;
        }

        if (
            $identifier === ''
            || \strlen($identifier) > 255
            || $password === ''
            || \strlen($password) > 72
        ) {
            http_response_code(401);
            $this->renderPage(
                loginError: 'Invalid handle/email or password.',
                loginIdentifier: $identifier,
            );
            return;
        }

        $users = new UserRepository(Database::connect());
        $user = $users->findByIdentifier($identifier);
        $passwordHash = $user?->passwordHash ?? self::DUMMY_PASSWORD_HASH;

        if (!password_verify($password, $passwordHash) || $user === null) {
            http_response_code(401);
            $this->renderPage(
                loginError: 'Invalid handle/email or password.',
                loginIdentifier: $identifier,
            );
            return;
        }

        if ($user->id === null) {
            throw new \LogicException('A persisted user must have an ID.');
        }

        if (password_needs_rehash($user->passwordHash, PASSWORD_DEFAULT)) {
            $users->updatePasswordHash(
                $user->id,
                password_hash($password, PASSWORD_DEFAULT),
            );
        }

        if (!session_regenerate_id(true)) {
            throw new \RuntimeException('Unable to rotate the session ID after login.');
        }
        unset($_SESSION['csrf_token']);
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->firstName . ' ' . $user->lastName;
        $_SESSION['user_handle'] = $user->handle;
        $_SESSION['logged_in_at'] = time();

        $this->redirect('/login');
    }

    public function logout(): void
    {
        if (!$this->isCsrfTokenValid($this->postString('csrfToken'))) {
            http_response_code(403);
            $this->renderPage(
                loginError: 'The form has expired. Refresh the page and try again.',
                authenticatedUserName: isset($_SESSION['user_name'])
                    ? (string) $_SESSION['user_name']
                    : null,
            );
            return;
        }

        $_SESSION = [];

        if (ini_get('session.use_cookies')) {
            $cookie = session_get_cookie_params();
            setcookie(session_name(), '', [
                'expires' => time() - 42000,
                'path' => $cookie['path'],
                'domain' => $cookie['domain'],
                'secure' => $cookie['secure'],
                'httponly' => $cookie['httponly'],
                'samesite' => $cookie['samesite'] ?? 'Lax',
            ]);
        }

        if (!session_destroy()) {
            throw new \RuntimeException('Unable to destroy the user session.');
        }
        $this->redirect('/login?logged_out=1');
    }

    private function postString(string $name): string
    {
        $value = $_POST[$name] ?? '';

        return \is_string($value) ? $value : '';
    }

    private function renderPage(
        ?string $loginMessage = null,
        ?string $loginError = null,
        string $loginIdentifier = '',
        ?string $authenticatedUserName = null,
    ): void {
        $variables = [
            'pageTitle' => 'Athlete Access — IronPulse',
            'pageDescription' => 'Sign in to your IronPulse athlete or auditor profile.',
            'bodyClass' => 'login-page',
            'pageStylesheets' => ['/css/login.css'],
            'csrfToken' => $this->csrfToken(),
            'loginIdentifier' => $loginIdentifier,
            'authenticatedUserName' => $authenticatedUserName,
        ];

        if ($loginMessage !== null) {
            $variables['loginMessage'] = $loginMessage;
        }

        if ($loginError !== null) {
            $variables['loginError'] = $loginError;
        }

        $this->render('login', $variables);
    }
}
