<?php

declare(strict_types=1);

namespace App\Controller;

final class SubmitGymController extends AppController
{
    public function index(): void
    {
        $this->render('submit-gym', [
            'pageTitle' => 'Submit a Sanctuary — IronPulse',
            'pageDescription' => 'Submit an independent strength sanctuary for a peer-verified IronPulse hardware audit.',
            'bodyClass' => 'submit-gym-page',
            'pageStylesheets' => ['/css/page-components.css', '/css/submit-gym.css'],
        ]);
    }
}
