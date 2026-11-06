<?php

declare(strict_types=1);

namespace App\Controller;

final class LeaderboardController extends AppController
{
    public function index(): void
    {
        $this->render('leaderboard', [
            'pageTitle' => 'Global Leaderboards — IronPulse',
            'pageDescription' => 'Verified powerlifting totals, spotter karma, and strength sanctuary rankings from the IronPulse community.',
            'bodyClass' => 'leaderboard-page',
            'pageStylesheets' => ['/css/page-components.css', '/css/leaderboard.css'],
        ]);
    }
}
