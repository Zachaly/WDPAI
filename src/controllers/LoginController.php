<?php

declare(strict_types=1);

namespace App\Controller;

final class LoginController extends AppController
{
    public function index(): void
    {
        $this->renderPage();
    }

    public function store(): void
    {
        $this->renderPage('This login preview is a mockup. Authentication is not connected yet.');
    }

    private function renderPage(?string $loginMessage = null): void
    {
        $variables = [
            'pageTitle' => 'Athlete Access — IronPulse',
            'pageDescription' => 'Sign in to your IronPulse athlete or auditor profile.',
            'bodyClass' => 'login-page',
            'pageStylesheets' => ['/css/login.css'],
        ];

        if ($loginMessage !== null) {
            $variables['loginMessage'] = $loginMessage;
        }

        $this->render('login', $variables);
    }
}
