<?php

declare(strict_types=1);

namespace App\Controller;

final class ForumController extends AppController
{
    public function index(): void
    {
        $this->render('forum', [
            'pageTitle' => 'The Locker Room — IronPulse Forum',
            'pageDescription' => 'Meet the IronPulse strength community for form checks, gear reviews, meet prep, and gym intelligence.',
            'bodyClass' => 'forum-page',
            'pageStylesheets' => ['/css/page-components.css', '/css/forum.css'],
        ]);
    }
}
