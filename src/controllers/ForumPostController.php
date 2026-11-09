<?php

declare(strict_types=1);

namespace App\Controller;

final class ForumPostController extends AppController
{
    private const CHANNELS = [
        'equipment' => 'Equipment & Knurling',
        'form-check' => 'Form Check Telemetry',
        'meet-prep' => 'Meet Prep & Peaking',
        'sanctuary' => 'Sanctuary Audits',
        'bar-velocity' => 'Barbell Velocity',
    ];

    public function index(): void
    {
        $this->renderPage();
    }

    public function store(): void
    {
        $postedTitle = $_POST['title'] ?? '';
        $postedBody = $_POST['body'] ?? '';
        $postedChannel = $_POST['channel'] ?? '';
        $postedIntent = $_POST['intent'] ?? '';
        $title = is_string($postedTitle) ? trim($postedTitle) : '';
        $body = is_string($postedBody) ? trim($postedBody) : '';
        $channel = is_string($postedChannel) ? $postedChannel : '';
        $intent = is_string($postedIntent) ? $postedIntent : '';
        $postedTags = $_POST['tags'] ?? [];
        $tags = is_array($postedTags)
            ? array_values(array_filter(
                array_map(
                    static fn (mixed $tag): string =>
                        is_string($tag) ? substr(ltrim(trim($tag), '#'), 0, 24) : '',
                    array_slice($postedTags, 0, 4),
                ),
                static fn (string $tag): bool => $tag !== '',
            ))
            : [];

        if (!array_key_exists($channel, self::CHANNELS)) {
            http_response_code(422);
            $this->renderPage(
                $title,
                $body,
                'equipment',
                $tags,
                'Select a discussion channel before continuing.',
                'error',
            );
            return;
        }

        if (!in_array($intent, ['publish', 'save-draft'], true)) {
            http_response_code(422);
            $this->renderPage(
                $title,
                $body,
                $channel,
                $tags,
                'Choose whether to preview a post or save a draft.',
                'error',
            );
            return;
        }

        $titleLength = preg_match_all('/./us', $title);
        if ($intent === 'publish' && (
            $title === ''
            || $body === ''
            || $titleLength === false
            || $titleLength > 150
        )) {
            http_response_code(422);
            $this->renderPage(
                $title,
                $body,
                $channel,
                $tags,
                'Add a title of 150 characters or fewer and post details before publishing.',
                'error',
            );
            return;
        }

        $message = $intent === 'save-draft'
            ? 'Draft preview ready. Drafts are not stored yet.'
            : 'Post preview ready. Publishing is not connected yet.';

        $this->renderPage($title, $body, $channel, $tags, $message, 'success');
    }

    /**
     * @param list<string> $tags
     */
    private function renderPage(
        string $title = 'Rogue Ohio 29mm Aggressive Knurl vs Eleiko IPF Spec: Wear rate after 500',
        string $body = "Audited both bars under 20x optical magnification after 6 months of daily 250.0 kg rack pulls. The 29mm aggressive volcano knurling on the raw steel showed zero degradation on the center grip index, whereas the chrome-plated auxiliary bar lost approximately 0.08mm tooth depth along the outer gripping tract.\n\nAttached bar speed velocity telemetry logs from Platform 04 (Optojump laser displacement sensor):\n- Set 1: 275.0 kg @ RPE 8.5 (V_mean: 0.28 m/s, Peak: 0.41 m/s)\n- Set 2: 290.0 kg @ RPE 9.0 (V_mean: 0.22 m/s, Peak: 0.34 m/s)",
        string $channel = 'equipment',
        array $tags = ['Eleiko', 'BarbellWear', 'KnurlingAudit', 'CompBench'],
        ?string $message = null,
        string $messageType = 'success',
    ): void {
        $footerComponent = [
            'class' => 'forum-footer page-footer',
            'gridClass' => 'forum-container forum-footer-content page-footer-grid',
            'brandClass' => 'forum-footer-brand page-footer-brand',
            'logoClass' => 'brand',
            'logoMarkClass' => 'brand-mark',
            'logoTextClass' => 'brand-text',
            'description' => 'High-performance telemetry and facility intelligence for strength sports. Real-time rack occupancy, calibrated plate tracking, and authentic powerlifting and weightlifting community culture.',
            'networkTag' => 'span',
            'boldNetworkSeparator' => true,
            'headingTag' => 'strong',
            'showSystemDot' => true,
            'bottomClass' => 'forum-container forum-footer-bottom page-footer-bottom',
            'columns' => [
                ['heading' => 'DISCOVERY', 'links' => [
                    ['href' => '/', 'label' => 'Gym Directory'],
                    ['href' => '/gear', 'label' => 'Calibrated Gear'],
                    ['href' => '/#reviews', 'label' => 'Facility Rankings'],
                    ['href' => '/submit-gym', 'label' => 'Submit Strength Hub'],
                ]],
                ['heading' => 'COMMUNITY HUB', 'links' => [
                    ['href' => '/forum', 'label' => 'Discussion Boards'],
                    ['href' => '/forum', 'label' => 'Meet Preparation'],
                    ['href' => '/forum', 'label' => 'Barbell Calibration Logs'],
                    ['href' => '/leaderboard#spotter-karma', 'label' => 'Coach Directory'],
                ]],
                ['heading' => 'TELEMETRY & LEGAL', 'links' => [
                    ['href' => '/forum', 'label' => 'Terms of Service'],
                    ['href' => '/forum', 'label' => 'Privacy Policy'],
                    ['href' => '/gear#hardware-index', 'label' => 'Hardware Specs & API'],
                    ['href' => '/gear', 'label' => 'Live System Status'],
                ]],
            ],
        ];

        $this->render('forum-post', [
            'pageTitle' => 'Create a Discussion — IronPulse Forum',
            'pageDescription' => 'Create a telemetry-backed discussion for the IronPulse strength community.',
            'bodyClass' => 'forum-page forum-post-page',
            'pageStylesheets' => [
                '/css/page-components.css',
                '/css/forum.css',
                '/css/forum-post.css',
            ],
            'pageScripts' => ['/js/forum-post.js'],
            'iconPrefix' => 'forum',
            'desktopHeaderComponent' => [
                'class' => 'site-header forum-desktop-header',
                'navigationClass' => 'main-nav',
                'activePage' => 'forum',
                'singleLineNavigation' => false,
                'searchHref' => '/forum',
                'searchLabel' => 'Find a discussion',
            ],
            'mobileHeaderComponent' => [
                'headerClass' => 'forum-mobile-header page-mobile-header',
                'brandClass' => 'forum-mobile-brand page-mobile-brand',
                'liveClass' => 'forum-live page-live-badge',
            ],
            'mobileNavComponent' => [
                'class' => 'forum-mobile-nav page-mobile-nav',
                'activePage' => 'forum',
                'items' => [
                    ['href' => '/leaderboard', 'page' => 'leaderboard', 'icon' => 'trophy', 'label' => 'BOARD'],
                    ['href' => '/forum', 'page' => 'forum', 'icon' => 'chat', 'label' => 'FORUM'],
                    ['href' => '/gear', 'page' => 'gear', 'icon' => 'dumbbell', 'label' => 'GEAR'],
                    ['href' => '/submit-gym', 'page' => 'submit-gym', 'icon' => 'pin', 'label' => 'SUBMIT'],
                ],
            ],
            'footerComponent' => $footerComponent,
            'formValues' => [
                'title' => $title,
                'body' => $body,
                'channel' => $channel,
                'tags' => $tags,
            ],
            'forumPostChannels' => self::CHANNELS,
            'formMessage' => $message,
            'formMessageType' => $messageType,
        ]);
    }
}
