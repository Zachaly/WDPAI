<?php

declare(strict_types=1);

namespace App\Controller;

final class GearController extends AppController
{
    public function index(): void
    {
        $this->render('gear', [
            'pageTitle' => 'Verified Equipment Inventory — IronPulse',
        ]);
    }
}
