<?php

declare(strict_types=1);

namespace App\Controller;

use App\Database;
use App\Model\User;
use App\Repository\UserRepository;
use DateTimeImmutable;
use DateTimeZone;
use PDOException;

final class RegisterController extends AppController
{
    public function index(): void
    {
        $this->renderPage();
    }

    public function store(): void
    {
        $firstName = trim($this->postString('first_name'));
        $lastName = trim($this->postString('last_name'));
        $description = trim($this->postString('description'));
        $city = trim($this->postString('city'));
        $handle = trim($this->postString('handle'));
        $email = strtolower(trim($this->postString('email')));
        $password = $this->postString('password');
        $passwordConfirmation = $this->postString('password_confirmation');
        $csrfToken = $this->postString('csrfToken');
        $termsAccepted = $this->postString('terms') === '1';

        $formValues = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'description' => $description,
            'city' => $city,
            'handle' => $handle,
            'email' => $email,
        ];
        $errors = [];

        if (!$this->isCsrfTokenValid($csrfToken)) {
            http_response_code(403);
            $errors[] = 'The form has expired. Refresh the page and try again.';
        }

        if ($firstName === '' || !$this->isWithinCharacterLimit($firstName, 100)) {
            $errors[] = 'Enter a first name of up to 100 characters.';
        }

        if ($lastName === '' || !$this->isWithinCharacterLimit($lastName, 100)) {
            $errors[] = 'Enter a last name of up to 100 characters.';
        }

        if (!$this->isWithinCharacterLimit($description, 500)) {
            $errors[] = 'Keep the description to 500 characters or fewer.';
        }

        if (!$this->isWithinCharacterLimit($city, 100)) {
            $errors[] = 'Keep the city to 100 characters or fewer.';
        }

        if (preg_match('/\A[A-Za-z0-9_]{3,30}\z/', $handle) !== 1) {
            $errors[] = 'The handle must be 3–30 characters and contain only letters, numbers, or underscores.';
        }

        if (
            \strlen($email) > 255
            || filter_var($email, FILTER_VALIDATE_EMAIL) === false
        ) {
            $errors[] = 'Enter a valid email address.';
        }

        if (
            \strlen($password) < 8
            || \strlen($password) > 72
            || preg_match('/\d/', $password) !== 1
            || preg_match('/[^A-Za-z0-9]/', $password) !== 1
        ) {
            $errors[] = 'Use a password of 8–72 bytes with at least one number and one special character.';
        }

        if ($password !== $passwordConfirmation) {
            $errors[] = 'The passwords do not match.';
        }

        if (!$termsAccepted) {
            $errors[] = 'Accept the registration terms to create an account.';
        }

        if ($errors !== []) {
            $this->renderPage(
                errors: $errors,
                formValues: $formValues,
                termsAccepted: $termsAccepted,
            );
            return;
        }

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $user = new User(
            id: null,
            firstName: $firstName,
            lastName: $lastName,
            handle: strtolower($handle),
            email: $email,
            passwordHash: $passwordHash,
            termsAcceptedAt: new DateTimeImmutable('now', new DateTimeZone('UTC')),
            description: $description,
            city: $city,
        );

        try {
            $users = new UserRepository(Database::connect());
            $users->create($user);
        } catch (PDOException $exception) {
            if (($exception->errorInfo[0] ?? null) !== '23505') {
                throw $exception;
            }

            http_response_code(422);
            $this->renderPage(
                errors: ['An account with this email address or handle already exists.'],
                formValues: $formValues,
                termsAccepted: $termsAccepted,
            );
            return;
        }

        $this->redirect('/login?registered=1');
    }

    private function postString(string $name): string
    {
        $value = $_POST[$name] ?? '';

        return \is_string($value) ? $value : '';
    }

    private function isWithinCharacterLimit(string $value, int $limit): bool
    {
        $length = preg_match_all('/./us', $value);

        return $length !== false && $length <= $limit;
    }

    /**
     * @param list<string> $errors
     * @param array<string, string> $formValues
     */
    private function renderPage(
        ?string $registrationMessage = null,
        array $errors = [],
        array $formValues = [],
        bool $termsAccepted = false,
    ): void {
        $variables = [
            'pageTitle' => 'Athlete Registration — IronPulse',
            'pageDescription' => 'Join the IronPulse strength community with a verified athlete profile.',
            'bodyClass' => 'register-page',
            'pageStylesheets' => ['/css/register.css'],
            'csrfToken' => $this->csrfToken(),
            'errors' => $errors,
            'formValues' => $formValues,
            'termsAccepted' => $termsAccepted,
        ];

        if ($registrationMessage !== null) {
            $variables['registrationMessage'] = $registrationMessage;
        }

        $this->render('register', $variables);
    }
}
