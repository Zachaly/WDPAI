<?php

declare(strict_types=1);

namespace App\Controller;

final class DefaultController extends AppController
{
    public function index(): void
    {
        $this->render('home', [
            'pageTitle' => 'IronPulse — Verified Strength Telemetry',
            'pageDescription' => 'IronPulse is a verified strength telemetry network: audited gym equipment inventories, calibrated gear reviews, and a community of serious lifters.',
            'pageStylesheets' => ['/css/page-components.css'],
        ]);
    }

    public function notFound(): void
    {
        $this->render('not-found', [
            'pageTitle' => 'Nie znaleziono strony',
            'pageLanguage' => 'pl',
        ]);
    }
}