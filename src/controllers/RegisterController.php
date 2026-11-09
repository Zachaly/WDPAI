<?php

declare(strict_types=1);

namespace App\Controller;

final class RegisterController extends AppController
{
    public function index(): void
    {
        $this->renderPage();
    }

    public function store(): void
    {
        $this->renderPage('This registration preview is a mockup. Account creation is not connected yet.');
    }

    private function renderPage(?string $registrationMessage = null): void
    {
        $variables = [
            'pageTitle' => 'Athlete Registration — IronPulse',
            'pageDescription' => 'Join the IronPulse strength community with a verified athlete profile.',
            'bodyClass' => 'register-page',
            'pageStylesheets' => ['/css/register.css'],
        ];

        if ($registrationMessage !== null) {
            $variables['registrationMessage'] = $registrationMessage;
        }

        $this->render('register', $variables);
    }
}
