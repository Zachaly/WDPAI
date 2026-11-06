<?php

declare(strict_types=1);

namespace App\Controller;

final class GearController extends AppController
{
    public function index(): void
    {
        $this->render('gear', [
            'pageTitle' => 'Verified Equipment Inventory — IronPulse',
            'pageDescription' => 'Browse verified strength equipment inventories, calibrated bars, and audited gym manifests on IronPulse.',
            'bodyClass' => 'gear-page',
            'pageStylesheets' => ['/css/page-components.css', '/css/gear.css'],
        ]);
    }
}
