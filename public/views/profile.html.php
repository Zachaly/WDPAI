<?php

declare(strict_types=1);
?>
<svg class="icon-sprite" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg">
    <symbol id="forum-dumbbell" viewBox="0 0 24 24"><path d="M3 9v6M6.5 7v10M17.5 7v10M21 9v6M6.5 12h11"/></symbol>
    <symbol id="forum-user" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4.5 21a7.5 7.5 0 0 1 15 0"/></symbol>
    <symbol id="forum-search" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m20 20-4-4"/></symbol>
    <symbol id="forum-plus" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></symbol>
    <symbol id="forum-chat" viewBox="0 0 24 24"><path d="M21 11.5a7.5 7.5 0 0 1-7.5 7.5H8l-5 3 1.3-4.6A8.5 8.5 0 1 1 21 11.5Z"/></symbol>
    <symbol id="forum-up" viewBox="0 0 24 24"><path d="m6 15 6-6 6 6"/></symbol>
    <symbol id="forum-eye" viewBox="0 0 24 24"><path d="M2.5 12S6 6 12 6s9.5 6 9.5 6-3.5 6-9.5 6-9.5-6-9.5-6Z"/><circle cx="12" cy="12" r="2.5"/></symbol>
    <symbol id="forum-bookmark" viewBox="0 0 24 24"><path d="M6 4h12v17l-6-4.2L6 21z"/></symbol>
    <symbol id="forum-pin" viewBox="0 0 24 24"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></symbol>
    <symbol id="forum-shield" viewBox="0 0 24 24"><path d="m12 3 8 3v5.5c0 5-3.4 8.2-8 9.5-4.6-1.3-8-4.5-8-9.5V6l8-3Z"/><path d="m8.5 12 2.4 2.4 4.6-5"/></symbol>
    <symbol id="forum-bars" viewBox="0 0 24 24"><path d="M3 9v6M6.5 7v10M17.5 7v10M21 9v6M6.5 12h11"/></symbol>
    <symbol id="forum-trophy" viewBox="0 0 24 24"><path d="M8 4h8v5a4 4 0 0 1-8 0V4ZM8 5H4v2a4 4 0 0 0 4 4m8-6h4v2a4 4 0 0 1-4 4m-4 2v5m-4 3h8m-7-3h6"/></symbol>
    <symbol id="forum-chart" viewBox="0 0 24 24"><path d="M4 19V5m0 14h17M8 15l4-4 3 2 5-6"/></symbol>
    <symbol id="forum-clock" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></symbol>
    <symbol id="forum-calendar" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4m8-4v4"/></symbol>
    <symbol id="forum-send" viewBox="0 0 24 24"><path d="m22 2-7 20-4-9-9-4 20-7ZM22 2 11 13"/></symbol>
    <symbol id="forum-share" viewBox="0 0 24 24"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="m8.7 10.7 6.6-4.4m-6.6 7 6.6 4.4"/></symbol>
    <symbol id="forum-check" viewBox="0 0 24 24"><path d="m5 12 4 4L19 6"/></symbol>
    <symbol id="forum-trend" viewBox="0 0 24 24"><path d="m3 17 6-6 4 4 8-9m-7 0h7v7"/></symbol>
    <symbol id="forum-edit" viewBox="0 0 24 24"><path d="m15 5 4 4M4 20l4-.8L19 8a2.1 2.1 0 0 0-3-3L5 16l-1 4Z"/></symbol>
</svg>

<?php
$iconPrefix = 'forum';
$desktopHeaderComponent = [
    'class' => 'site-header forum-desktop-header',
    'navigationClass' => 'main-nav',
    'activePage' => 'forum',
    'singleLineNavigation' => false,
    'searchHref' => '/forum',
    'searchLabel' => 'Find a discussion',
];
$mobileHeaderComponent = [
    'headerClass' => 'forum-mobile-header page-mobile-header',
    'brandClass' => 'forum-mobile-brand page-mobile-brand',
    'liveClass' => 'forum-live page-live-badge',
];
$mobileNavComponent = [
    'class' => 'forum-mobile-nav page-mobile-nav',
    'activePage' => 'forum',
    'items' => [
        ['href' => '/leaderboard', 'page' => 'leaderboard', 'icon' => 'trophy', 'label' => 'BOARD'],
        ['href' => '/forum', 'page' => 'forum', 'icon' => 'chat', 'label' => 'FORUM'],
        ['href' => '/gear', 'page' => 'gear', 'icon' => 'dumbbell', 'label' => 'GEAR'],
        ['href' => '/submit-gym', 'page' => 'submit-gym', 'icon' => 'pin', 'label' => 'SUBMIT'],
    ],
];
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
require __DIR__ . '/components/desktop-header.html.php';
require __DIR__ . '/components/mobile-header.html.php';
?>

<main class="profile-main">
    <div class="forum-container">
        <nav class="profile-breadcrumb" aria-label="Breadcrumb"><a href="/forum">COMMUNITY</a><span>/</span><strong>ATHLETE PROFILE</strong></nav>

        <section class="profile-hero" aria-labelledby="profile-name">
            <div class="profile-cover">
                <span class="profile-cover-grid" aria-hidden="true"></span>
                <span class="profile-cover-label"><i></i> VERIFIED LIFTER NODE // <?= htmlspecialchars((string) $profile['location'], ENT_QUOTES, 'UTF-8') ?></span>
                <span class="profile-cover-code" aria-hidden="true">IP / 04 — 93 KG</span>
            </div>
            <div class="profile-identity">
                <div class="profile-avatar-wrap">
                    <?php if ($profile['image'] !== ''): ?>
                        <img class="profile-avatar" src="<?= htmlspecialchars((string) $profile['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars((string) $profile['name'], ENT_QUOTES, 'UTF-8') ?>">
                    <?php else: ?>
                        <span class="profile-avatar profile-avatar-initials"><?= htmlspecialchars((string) $profile['initials'], ENT_QUOTES, 'UTF-8') ?></span>
                    <?php endif; ?>
                    <span class="profile-avatar-status" aria-label="Verified member"></span>
                </div>
                <div class="profile-name-block">
                    <div class="profile-name-row">
                        <h1 id="profile-name"><?= htmlspecialchars((string) $profile['name'], ENT_QUOTES, 'UTF-8') ?></h1>
                        <span class="profile-verified"><svg class="icon"><use href="#forum-check"></use></svg> VERIFIED</span>
                    </div>
                    <p class="profile-handle">@<?= htmlspecialchars((string) $profile['username'], ENT_QUOTES, 'UTF-8') ?> <span>&bull;</span> <?= htmlspecialchars((string) $profile['credential'], ENT_QUOTES, 'UTF-8') ?></p>
                    <div class="profile-location"><svg class="icon"><use href="#forum-pin"></use></svg><?= htmlspecialchars((string) $profile['location'], ENT_QUOTES, 'UTF-8') ?><span>&bull;</span><?= htmlspecialchars((string) $profile['joined'], ENT_QUOTES, 'UTF-8') ?></div>
                </div>
                <div class="profile-actions">
                    <button class="profile-follow-button" type="button" data-profile-follow aria-pressed="false"><svg class="icon"><use href="#forum-plus"></use></svg> FOLLOW LIFTER</button>
                    <button class="profile-share-button" type="button" aria-label="Share profile" data-profile-share><svg class="icon"><use href="#forum-share"></use></svg></button>
                </div>
            </div>
            <p class="profile-bio"><?= htmlspecialchars((string) $profile['bio'], ENT_QUOTES, 'UTF-8') ?></p>
            <div class="profile-badges">
                <span><svg class="icon"><use href="#forum-shield"></use></svg><?= htmlspecialchars((string) $profile['badge'], ENT_QUOTES, 'UTF-8') ?></span>
                <span><svg class="icon"><use href="#forum-chart"></use></svg> TELEMETRY-CONNECTED</span>
                <span><svg class="icon"><use href="#forum-trophy"></use></svg> COMMUNITY TRUST <?= htmlspecialchars((string) $profile['karma'], ENT_QUOTES, 'UTF-8') ?></span>
            </div>
            <p class="profile-action-notice" role="status" aria-live="polite" data-profile-notice hidden></p>
        </section>

        <section class="profile-stats" aria-label="Community statistics">
            <article class="profile-stat-card"><span><svg class="icon"><use href="#forum-chat"></use></svg> FORUM POSTS</span><strong><?= htmlspecialchars((string) $profile['posts'], ENT_QUOTES, 'UTF-8') ?></strong><small>COMMUNITY CONTRIBUTIONS</small></article>
            <article class="profile-stat-card"><span><svg class="icon"><use href="#forum-trophy"></use></svg> SPOTTER KARMA</span><strong><?= htmlspecialchars((string) $profile['karma'], ENT_QUOTES, 'UTF-8') ?></strong><small>VERIFIED COMMUNITY REP</small></article>
            <article class="profile-stat-card"><span><svg class="icon"><use href="#forum-eye"></use></svg> POST VIEWS</span><strong><?= htmlspecialchars((string) $profile['views'], ENT_QUOTES, 'UTF-8') ?></strong><small>ACROSS ALL DISCUSSIONS</small></article>
            <article class="profile-stat-card profile-stat-live"><span><svg class="icon"><use href="#forum-trend"></use></svg> LIFETIME TOTAL</span><strong><?= htmlspecialchars((string) $profile['total'], ENT_QUOTES, 'UTF-8') ?></strong><small>RAW POWERLIFTING · KG</small></article>
        </section>

        <div class="profile-content-grid">
            <section class="profile-main-column">
                <section class="profile-card profile-lift-card">
                    <div class="profile-section-heading">
                        <div><span class="profile-eyebrow">PERFORMANCE LOG</span><h2>Competition Lifts</h2></div>
                        <span class="profile-sync"><i></i> VERIFIED TOTAL</span>
                    </div>
                    <div class="profile-lifts">
                        <article><span class="profile-lift-icon"><svg class="icon"><use href="#forum-bars"></use></svg></span><div><small>SQUAT</small><strong><?= htmlspecialchars((string) $profile['squat'], ENT_QUOTES, 'UTF-8') ?></strong><span>COMPETITION BEST</span></div><b>IPF</b></article>
                        <article><span class="profile-lift-icon profile-bench-icon"><svg class="icon"><use href="#forum-dumbbell"></use></svg></span><div><small>BENCH PRESS</small><strong><?= htmlspecialchars((string) $profile['bench'], ENT_QUOTES, 'UTF-8') ?></strong><span>COMPETITION BEST</span></div><b>IPF</b></article>
                        <article><span class="profile-lift-icon profile-deadlift-icon"><svg class="icon"><use href="#forum-up"></use></svg></span><div><small>DEADLIFT</small><strong><?= htmlspecialchars((string) $profile['deadlift'], ENT_QUOTES, 'UTF-8') ?></strong><span>COMPETITION BEST</span></div><b>IPF</b></article>
                    </div>
                    <div class="profile-total-row"><span><svg class="icon"><use href="#forum-scale"></use></svg> VERIFIED MEET TOTAL</span><strong><?= htmlspecialchars((string) $profile['total'], ENT_QUOTES, 'UTF-8') ?></strong></div>
                </section>

                <section class="profile-card profile-activity-card">
                    <div class="profile-section-heading profile-activity-heading">
                        <div><span class="profile-eyebrow">COMMUNITY FOOTPRINT</span><h2>Recent Activity</h2></div>
                        <nav class="profile-tabs" aria-label="Profile activity">
                            <button type="button" class="is-active" aria-pressed="true" data-profile-tab="posts">POSTS <span>34</span></button>
                            <button type="button" aria-pressed="false" data-profile-tab="lifts">LIFTS</button>
                            <button type="button" aria-pressed="false" data-profile-tab="awards">AWARDS</button>
                        </nav>
                    </div>

                    <div class="profile-tab-panel" data-profile-panel="posts">
                        <article class="profile-post-preview">
                            <div class="profile-post-category"><span><svg class="icon"><use href="#forum-camera"></use></svg><?= htmlspecialchars((string) $profile['postCategory'], ENT_QUOTES, 'UTF-8') ?></span><time><?= htmlspecialchars((string) $profile['postTime'], ENT_QUOTES, 'UTF-8') ?></time></div>
                            <h3><a href="<?= htmlspecialchars((string) $profile['postHref'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars((string) $profile['postTitle'], ENT_QUOTES, 'UTF-8') ?></a></h3>
                            <p>Sharing verified session notes and telemetry for constructive feedback from the strength community.</p>
                            <div class="profile-post-footer"><span><svg class="icon"><use href="#forum-up"></use></svg> 428</span><span><svg class="icon"><use href="#forum-chat"></use></svg> 112 REPLIES</span><span><svg class="icon"><use href="#forum-eye"></use></svg> 4.1K VIEWS</span><a href="<?= htmlspecialchars((string) $profile['postHref'], ENT_QUOTES, 'UTF-8') ?>">VIEW DISCUSSION <svg class="icon"><use href="#forum-send"></use></svg></a></div>
                        </article>
                        <article class="profile-post-preview profile-post-secondary">
                            <div class="profile-post-category"><span><svg class="icon"><use href="#forum-chart"></use></svg>TRAINING LOG</span><time>2 DAYS AGO</time></div>
                            <h3><a href="/forum/2">Four-week peak block: bar speed and top-set readiness</a></h3>
                            <p>Session-by-session velocity notes from the final training block before meet day.</p>
                            <div class="profile-post-footer"><span><svg class="icon"><use href="#forum-up"></use></svg> 96</span><span><svg class="icon"><use href="#forum-chat"></use></svg> 18 REPLIES</span><span><svg class="icon"><use href="#forum-eye"></use></svg> 1.2K VIEWS</span><a href="/forum/2">VIEW DISCUSSION <svg class="icon"><use href="#forum-send"></use></svg></a></div>
                        </article>
                    </div>

                    <div class="profile-tab-panel" data-profile-panel="lifts" hidden>
                        <div class="profile-empty-state"><svg class="icon"><use href="#forum-chart"></use></svg><strong>Training log preview</strong><span>Recent verified sessions are displayed in this mock profile.</span></div>
                    </div>
                    <div class="profile-tab-panel" data-profile-panel="awards" hidden>
                        <div class="profile-awards">
                            <article><span class="profile-award-icon"><svg class="icon"><use href="#forum-trophy"></use></svg></span><span><strong>CONSISTENT CONTRIBUTOR</strong><small>30+ evidence-backed posts</small></span><b>2025</b></article>
                            <article><span class="profile-award-icon profile-award-blue"><svg class="icon"><use href="#forum-shield"></use></svg></span><span><strong>VERIFIED LIFTER</strong><small>Credentials checked by the community</small></span><b>2024</b></article>
                            <article><span class="profile-award-icon profile-award-orange"><svg class="icon"><use href="#forum-check"></use></svg></span><span><strong>FORM CHECK REGULAR</strong><small>Helpful training feedback shared</small></span><b>2024</b></article>
                        </div>
                    </div>
                    <a class="profile-view-all" href="/forum">VIEW ALL COMMUNITY ACTIVITY <svg class="icon"><use href="#forum-send"></use></svg></a>
                </section>
            </section>

            <aside class="profile-sidebar">
                <section class="profile-card profile-trust-card">
                    <div class="profile-section-heading"><div><span class="profile-eyebrow">COMMUNITY SIGNAL</span><h2>Trust &amp; Verification</h2></div><svg class="icon"><use href="#forum-shield"></use></svg></div>
                    <div class="profile-trust-score"><strong>98.4<span>%</span></strong><span><i></i> HIGH CONFIDENCE</span></div>
                    <div class="profile-trust-meter"><i></i></div>
                    <p>Identity, competition credentials, and recent activity meet community verification standards.</p>
                    <ul><li><svg class="icon"><use href="#forum-check"></use></svg> Lifter credentials verified</li><li><svg class="icon"><use href="#forum-check"></use></svg> Telemetry-linked sessions</li><li><svg class="icon"><use href="#forum-check"></use></svg> Community standards upheld</li></ul>
                </section>

                <section class="profile-card profile-gym-card">
                    <div class="profile-section-heading"><div><span class="profile-eyebrow">HOME SANCTUARY</span><h2>Training Location</h2></div><svg class="icon"><use href="#forum-pin"></use></svg></div>
                    <div class="profile-gym-image" role="img" aria-label="Black Iron Compound training floor"></div>
                    <strong>Black Iron Compound #04</strong>
                    <span class="profile-gym-location"><svg class="icon"><use href="#forum-pin"></use></svg> Austin, Texas</span>
                    <a href="/submit-gym">VIEW SANCTUARY PROFILE <svg class="icon"><use href="#forum-send"></use></svg></a>
                </section>

                <section class="profile-card profile-connect-card">
                    <div class="profile-section-heading"><div><span class="profile-eyebrow">NETWORK STATUS</span><h2>Training Connections</h2></div></div>
                    <div class="profile-connection-row"><div class="profile-connection-avatars"><a href="/profile/4" aria-label="View Elena Korov's profile">EK</a><a href="/profile/8" aria-label="View Dave Knurl's profile">DK</a><a href="/profile/2" aria-label="View Marcus Knurling's profile">MK</a><span>+12</span></div><span>VERIFIED TRAINING NETWORK</span></div>
                    <a class="profile-connect-link" href="/leaderboard#spotter-karma">VIEW COMMUNITY LEADERBOARD <svg class="icon"><use href="#forum-send"></use></svg></a>
                </section>

                <p class="profile-static-note"><svg class="icon"><use href="#forum-info"></use></svg> Profile data is a static mockup. Training records, verification, and community actions are not connected.</p>
            </aside>
        </div>
    </div>
</main>

<?php
require __DIR__ . '/components/footer.html.php';
require __DIR__ . '/components/mobile-nav.html.php';
?>
