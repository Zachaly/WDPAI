<?php

declare(strict_types=1);

namespace App\Controller;

final class SubmitGymController extends AppController
{
    public function index(): void
    {
        $this->render('submit-gym', [
            'pageTitle' => 'Submit a Sanctuary — IronPulse',
        ]);
    }
}
