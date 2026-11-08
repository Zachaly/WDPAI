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

    public function show(int $id): void
    {
        $this->render('forum-thread', [
            'pageTitle' => 'Discussion #' . $id . ' — The Locker Room',
            'pageDescription' => 'View a discussion in the IronPulse strength community forum.',
            'bodyClass' => 'forum-page forum-thread-page',
            'pageStylesheets' => [
                '/css/page-components.css',
                '/css/forum.css',
                '/css/forum-thread.css',
            ],
            'pageScripts' => ['/js/forum-thread.js'],
            'postId' => $id,
        ]);
    }
}
