<?php

declare(strict_types=1);

$iconPrefix = 'lb';
$desktopHeaderComponent = [
    'class' => 'site-header leaderboard-desktop-header',
    'navigationClass' => 'main-nav',
    'activePage' => 'leaderboard',
    'singleLineNavigation' => false,
    'searchHref' => '#athlete-standings',
    'searchLabel' => 'Browse athlete standings',
];
$mobileHeaderComponent = [
    'headerClass' => 'leaderboard-mobile-header page-mobile-header',
    'brandClass' => 'leaderboard-mobile-brand page-mobile-brand',
    'liveClass' => 'leaderboard-live page-live-badge',
];
$mobileNavComponent = [
    'class' => 'leaderboard-mobile-nav page-mobile-nav',
    'activePage' => 'leaderboard',
    'items' => [
        ['href' => '/leaderboard', 'page' => 'leaderboard', 'icon' => 'trophy', 'label' => 'BOARD'],
        ['href' => '/forum', 'page' => 'forum', 'icon' => 'forum', 'label' => 'FORUM'],
        ['href' => '/gear', 'page' => 'gear', 'icon' => 'dumbbell', 'label' => 'GEAR'],
        ['href' => '/submit-gym', 'page' => 'submit-gym', 'icon' => 'plus', 'label' => 'SUBMIT'],
    ],
];
$footerComponent = [
    'class' => 'leaderboard-footer page-footer',
    'gridClass' => 'leaderboard-container leaderboard-footer-grid page-footer-grid',
    'brandClass' => 'leaderboard-footer-brand page-footer-brand',
    'logoClass' => 'brand',
    'logoMarkClass' => 'brand-mark',
    'logoTextClass' => 'brand-text',
    'description' => 'High-performance telemetry and facility intelligence for strength sports. Real-time rack occupancy, calibrated plate tracking, and authentic powerlifting and weightlifting community culture.',
    'networkTag' => 'span',
    'boldNetworkSeparator' => false,
    'headingTag' => 'strong',
    'showSystemDot' => true,
    'bottomClass' => 'leaderboard-container leaderboard-footer-bottom page-footer-bottom',
    'columns' => [
        ['heading' => 'DISCOVERY', 'links' => [
            ['href' => '/', 'label' => 'Gym Directory'],
            ['href' => '/gear', 'label' => 'Calibrated Gear'],
            ['href' => '/leaderboard#top-sanctuaries', 'label' => 'Facility Rankings'],
            ['href' => '/submit-gym', 'label' => 'Submit Strength Hub'],
        ]],
        ['heading' => 'COMMUNITY HUB', 'links' => [
            ['href' => '/forum', 'label' => 'Discussion Boards'],
            ['href' => '/leaderboard#athlete-standings', 'label' => 'Meet Preparation'],
            ['href' => '/forum#discussion-gear-review', 'label' => 'Barbell Calibration Logs'],
            ['href' => '/leaderboard#spotter-karma', 'label' => 'Coach Directory'],
        ]],
        ['heading' => 'TELEMETRY & LEGAL', 'links' => [
            ['href' => '/leaderboard', 'label' => 'Terms of Service'],
            ['href' => '/leaderboard', 'label' => 'Privacy Policy'],
            ['href' => '/gear#hardware-index', 'label' => 'Hardware Specs & API'],
            ['href' => '/leaderboard', 'label' => 'Live System Status'],
        ]],
    ],
];
$leaderboardData = require __DIR__ . '/leaderboard-data.php';
?>
<svg class="icon-sprite" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg">
    <symbol id="lb-dumbbell" viewBox="0 0 24 24"><path d="M3 9v6M6.5 7v10M17.5 7v10M21 9v6M6.5 12h11"/></symbol>
    <symbol id="lb-user" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4.5 21a7.5 7.5 0 0 1 15 0"/></symbol>
    <symbol id="lb-search" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m20 20-4-4"/></symbol>
    <symbol id="lb-shield" viewBox="0 0 24 24"><path d="m12 3 8 3v5.5c0 5-3.4 8.2-8 9.5-4.6-1.3-8-4.5-8-9.5V6l8-3Z"/><path d="m8.5 12 2.4 2.4 4.6-5"/></symbol>
    <symbol id="lb-people" viewBox="0 0 24 24"><circle cx="9" cy="8" r="3"/><path d="M3 20v-1a6 6 0 0 1 12 0v1Zm13-9a3 3 0 1 0-1-5.8M18 14a5 5 0 0 1 3 4.6v1.4"/></symbol>
    <symbol id="lb-trophy" viewBox="0 0 24 24"><path d="M8 4h8v5a4 4 0 0 1-8 0V4ZM8 5H4v2a4 4 0 0 0 4 4m8-6h4v2a4 4 0 0 1-4 4m-4 2v5m-4 3h8m-7-3h6"/></symbol>
    <symbol id="lb-bolt" viewBox="0 0 24 24"><path d="m13 2-9 12h7l-1 8 10-13h-7z"/></symbol>
    <symbol id="lb-medal" viewBox="0 0 24 24"><circle cx="12" cy="14" r="6"/><path d="m8 9-2-6h5l1 5m4 1 2-6h-5l-1 5m0 3 1.2 2.4 2.8.4-2 2 .5 2.8-2.5-1.3-2.5 1.3.5-2.8-2-2 2.8-.4z"/></symbol>
    <symbol id="lb-star" viewBox="0 0 24 24"><path d="m12 2.6 2.8 5.7 6.2.9-4.5 4.4 1.1 6.2-5.6-3-5.6 3 1.1-6.2L3 9.2l6.2-.9L12 2.6Z"/></symbol>
    <symbol id="lb-pin" viewBox="0 0 24 24"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></symbol>
    <symbol id="lb-video" viewBox="0 0 24 24"><rect x="3" y="6" width="13" height="12" rx="2"/><path d="m16 10 5-3v10l-5-3z"/></symbol>
    <symbol id="lb-calendar" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4m8-4v4"/></symbol>
    <symbol id="lb-info" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 11v5m0-8h.01"/></symbol>
    <symbol id="lb-check" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="m8.5 12.2 2.4 2.4 4.6-5"/></symbol>
    <symbol id="lb-bars" viewBox="0 0 24 24"><path d="M3 9v6M6.5 7v10M17.5 7v10M21 9v6M6.5 12h11"/></symbol>
    <symbol id="lb-filter" viewBox="0 0 24 24"><path d="M4 7h16M7 12h10m-7 5h4"/><circle cx="8" cy="7" r="1.5"/><circle cx="15" cy="12" r="1.5"/></symbol>
    <symbol id="lb-arrow" viewBox="0 0 24 24"><path d="M4 12h15m-6-6 6 6-6 6"/></symbol>
    <symbol id="lb-clock" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></symbol>
    <symbol id="lb-award" viewBox="0 0 24 24"><circle cx="12" cy="8" r="6"/><path d="m8 13-1 9 5-3 5 3-1-9"/></symbol>
    <symbol id="lb-scale" viewBox="0 0 24 24"><path d="M12 3v18m-8-4h16M6 17l-3 4m15-4 3 4M5 9c0-2 3-4 7-4s7 2 7 4M4 9l-2 5h5L4 9Zm16 0-3 5h5l-2-5Z"/></symbol>
    <symbol id="lb-plus" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></symbol>
    <symbol id="lb-forum" viewBox="0 0 24 24"><path d="M21 11.5a7.5 7.5 0 0 1-7.5 7.5H8l-5 3 1.3-4.6A8.5 8.5 0 1 1 21 11.5Z"/></symbol>
</svg>

<?php
require __DIR__ . '/components/desktop-header.html.php';
require __DIR__ . '/components/mobile-header.html.php';
?>

<main class="leaderboard-main">
    <div class="leaderboard-container">
        <div class="leaderboard-system-bar">
            <div><span><i></i>SYS-904 AUDIT ACTIVE</span><strong>GLOBAL LIFTER TELEMETRY &amp; SANCTUARY INDEX</strong></div>
            <div><span><svg class="icon"><use href="#lb-shield"></use></svg>99.94% DATA HASH CONFIRMED</span><span><svg class="icon"><use href="#lb-clock"></use></svg>SYNC CYCLE: 12M AGO</span></div>
        </div>

        <section class="leaderboard-hero">
            <div>
                <span class="leaderboard-kicker">VERIFIED PERFORMANCE PROTOCOL / UNIVERSAL STANDINGS</span>
                <h1>Global leaderboards: athlete telemetry &amp; sanctuaries</h1>
                <p>Audited powerlifting totals, knurl spotter karma, verified PR milestones, and top-tier strength facility rankings across the worldwide underground iron network.</p>
            </div>
            <div class="leaderboard-hero-actions"><a href="#athlete-standings"><svg class="icon"><use href="#lb-check"></use></svg>Export CSV</a><a href="#claim-total"><svg class="icon"><use href="#lb-plus"></use></svg>Submit Total</a></div>
        </section>

        <section class="leaderboard-metrics" aria-label="Leaderboard statistics">
            <article><span>TOTAL AUDITED LIFTERS</span><strong>18,420<small>+</small></strong><p><b>IPF / USAPL / WRPF</b> verified logs</p><svg class="icon"><use href="#lb-people"></use></svg></article>
            <article><span>TOP CURRENT TOTAL</span><strong>1,062.5<small> KG</small></strong><p><b>Open Raw / Wraps</b> &bull; 120kg+ Div</p><svg class="icon"><use href="#lb-bolt"></use></svg></article>
            <article><span>SPOTTER KARMA POOL</span><strong>142.8K<small> PTS</small></strong><p><b>4,892 Audits</b> &amp; plate calibrations</p><svg class="icon"><use href="#lb-shield"></use></svg></article>
            <article class="sanctuary-metric"><span>APEX SANCTUARY SCORE</span><strong>Metro Iron Club</strong><p><b>99.8% Hardware Score</b> &bull; Austin, TX</p><svg class="icon"><use href="#lb-star"></use></svg></article>
        </section>

        <nav class="leaderboard-tabs" aria-label="Leaderboard sections">
            <a class="is-active" href="#athlete-standings"><svg class="icon"><use href="#lb-trophy"></use></svg>Verified Lifter PRs &amp; Totals</a>
            <a href="#spotter-karma"><svg class="icon"><use href="#lb-shield"></use></svg>Spotter &amp; Verifier Karma</a>
            <a href="#top-sanctuaries"><svg class="icon"><use href="#lb-calendar"></use></svg>Top Rated Sanctuaries</a>
            <a href="/gear#hardware-index"><svg class="icon"><use href="#lb-bars"></use></svg>Barbell Calibration Registry</a>
        </nav>

        <section class="leaderboard-filterbar" aria-label="Leaderboard filters">
            <div class="leaderboard-filter-search"><svg class="icon"><use href="#lb-search"></use></svg><span>Filter athlete, handle, gym...</span></div>
            <span><b>FED:</b> All Federations</span>
            <span><b>CLASS:</b> 105 kg (231 lbs)</span>
            <span><b>TIMEFRAME:</b> 2025 Season</span>
            <span><b>LBS</b><i>KG</i></span>
        </section>

        <section class="podium-section" aria-labelledby="podium-heading">
            <div class="podium-heading"><h2 id="podium-heading"><i></i>Podium telemetry &mdash; top wilks / dots rankings</h2><span>NORMALIZED COEFFICIENTS</span></div>
            <div class="podium-grid">
                <?php foreach ($leaderboardData['podium'] as $podium): ?>
                    <?php require __DIR__ . '/components/leaderboard-podium-card.html.php'; ?>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="athlete-standings" id="athlete-standings">
            <div class="leaderboard-section-heading"><div><h2>Master athlete standings</h2><p>Audited through certified meet sheets, calibrated video hashes, and peer bar telemetry.</p></div><span><i></i> PEER VERIFIED &nbsp; <b></b> VIDEO CALIBRATED</span></div>
            <div class="standings-table-wrap">
                <table class="standings-table">
                    <thead><tr><th>#</th><th>Lifter &amp; credentials</th><th>DIV / CLASS</th><th>SQUAT (KG)</th><th>BENCH (KG)</th><th>DEADLIFT (KG)</th><th>TOTAL (KG)</th><th>DOTS</th><th>MEET SANCTION</th><th>PROOF</th></tr></thead>
                    <tbody>
                        <?php foreach ($leaderboardData['standings'] as $athlete): ?>
                            <?php require __DIR__ . '/components/leaderboard-standings-row.html.php'; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="standings-foot"><span>Showing <strong>1&ndash;8</strong> of <strong>1,482</strong> verified powerlifters</span><nav aria-label="Standings pages"><a href="#athlete-standings">Previous</a><a class="is-active" href="#athlete-standings">1</a><a href="#athlete-standings">2</a><a href="#athlete-standings">3</a><span>&hellip;</span><a href="#athlete-standings">185</a><a href="#athlete-standings">Next</a></nav></div>
        </section>

        <section class="leaderboard-mobile-athletes" aria-label="Top athlete standings">
            <div class="leaderboard-section-heading"><div><h2>Master athlete standings</h2><p>Peer-verified meet totals</p></div><span><i></i> VERIFIED</span></div>
            <?php foreach ($leaderboardData['mobileAthletes'] as $athlete): ?>
                <?php require __DIR__ . '/components/leaderboard-mobile-athlete-card.html.php'; ?>
            <?php endforeach; ?>
        </section>

        <div class="leaderboard-community-grid">
            <section class="community-karma" id="spotter-karma">
                <div class="community-panel-heading"><div><h2><i></i>Community spotter karma</h2><p>Top gear verifiers and referees reviewing knurl wear, plate tare scales, and lift compliance.</p></div><span>PEER AUDITORS</span></div>
                <ol class="karma-list">
                    <?php foreach ($leaderboardData['karma'] as $spotter): ?>
                        <?php require __DIR__ . '/components/leaderboard-karma-row.html.php'; ?>
                    <?php endforeach; ?>
                </ol>
                <div class="karma-note"><svg class="icon"><use href="#lb-info"></use></svg><p><strong>How Spotter Karma Works</strong><br>Earn +10 pts for verified video form reviews, +25 pts for calibrated plate scale submissions, and +50 pts for new sanctuary hardware inventories vetted by community peers.</p></div>
            </section>

            <section class="sanctuary-rankings" id="top-sanctuaries">
                <div class="community-panel-heading"><div><h2><i></i>Top rated strength sanctuaries</h2><p>Ranked by authenticated barbell specs, calibrated combo rack density, and member grip scores.</p></div><a href="/gear">EXPLORE ALL <svg class="icon"><use href="#lb-arrow"></use></svg></a></div>
                <ol class="sanctuary-list">
                    <?php foreach ($leaderboardData['sanctuaries'] as $sanctuary): ?>
                        <?php require __DIR__ . '/components/leaderboard-sanctuary-row.html.php'; ?>
                    <?php endforeach; ?>
                </ol>
                <a class="sanctuary-all-link" href="/gear">View full sanctuary rankings &amp; specs <svg class="icon"><use href="#lb-arrow"></use></svg></a>
            </section>
        </div>

        <section class="leaderboard-claim" id="claim-total">
            <div><span class="leaderboard-kicker"><svg class="icon"><use href="#lb-shield"></use></svg>AUDITED TELEMETRY ENGINE</span><h2>Think your total belongs on IronPulse?</h2><p>Submit sanctioned meet debrief or calibrated weigh-in video. All submissions verified by IPF/USAPL credentialed peer spotters within 24 hours. No phantom PRs. No uncalibrated iron.</p></div>
            <div><a href="#athlete-standings"><svg class="icon"><use href="#lb-filter"></use></svg>Audit Criteria (Rules)</a><a href="/forum"><svg class="icon"><use href="#lb-trophy"></use></svg>Claim Profile &amp; Submit Total</a></div>
        </section>
    </div>
</main>

<?php
require __DIR__ . '/components/footer.html.php';
require __DIR__ . '/components/mobile-nav.html.php';
?>
