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
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Verified powerlifting totals, spotter karma, and strength sanctuary rankings from the IronPulse community.">
    <title><?= htmlspecialchars((string) $pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%230b1326'/%3E%3Cpath d='M7 12v8M10 9v14M22 9v14M25 12v8M10 16h12' stroke='%23c3f400' stroke-width='2' stroke-linecap='round'/%3E%3C/svg%3E">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/page-components.css">
    <link rel="stylesheet" href="/css/leaderboard.css">
</head>
<body class="leaderboard-page">
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
                <article class="podium-card podium-silver">
                    <div class="podium-card-label"><strong>2</strong><span>SILVER PODIUM</span><b>WRPF 82.5KG</b></div>
                    <div class="podium-athlete">
                        <img src="/assets/img/marcus-vance.jpg" alt="">
                        <div><h3>Elena Korov <svg class="icon"><use href="#lb-shield"></use></svg></h3><span>@Elena_K &bull; Columbus, OH</span><b>Master Spotter + Elite</b></div>
                    </div>
                    <div class="podium-lifts"><div><span>SQUAT</span><strong>233.5 <small>kg</small></strong></div><div><span>BENCH</span><strong>145 <small>kg</small></strong></div><div><span>DEADLIFT</span><strong>265.5 <small>kg</small></strong></div></div>
                    <div class="podium-total"><span>AGGREGATE TOTAL<strong>644 <small>KG</small></strong></span><span>DOTS COEFFICIENT<strong>574.1</strong></span></div>
                </article>

                <article class="podium-card podium-gold">
                    <div class="podium-card-label"><strong>1</strong><span>WORLD LEADER</span><b>TIER 1 VERIFIED</b></div>
                    <div class="podium-athlete">
                        <img src="/assets/img/marcus-vance.jpg" alt="">
                        <div><h3>Marcus Vance <svg class="icon"><use href="#lb-shield"></use></svg></h3><span>@Vanguard_Beast &bull; Austin, TX</span><b>Metropolitan Iron Club Home</b></div>
                    </div>
                    <div class="podium-lifts"><div><span>SQUAT</span><strong>360.5 <small>kg</small><i>0.38 m/s</i></strong></div><div><span>BENCH</span><strong>229 <small>kg</small><i>0.9 m/s</i></strong></div><div><span>DEADLIFT</span><strong>401.5 <small>kg</small><i>0.24 m/s</i></strong></div></div>
                    <div class="podium-total"><span>AGGREGATE TOTAL<strong>991 <small>KG</small></strong><small>105kg Open Raw USAPL</small></span><span>DOTS SCORE<strong>582.4</strong><small>NATIONAL RECORD</small></span></div>
                </article>

                <article class="podium-card podium-bronze">
                    <div class="podium-card-label"><strong>3</strong><span>BRONZE PODIUM</span><b>RAW OPEN 120KG+</b></div>
                    <div class="podium-athlete">
                        <img src="/assets/img/iron-haven.jpg" alt="">
                        <div><h3>Dan Sullivan <svg class="icon"><use href="#lb-shield"></use></svg></h3><span>@BigDan_83 &bull; Dallas, TX</span><b>Raw Heavyweight Champion</b></div>
                    </div>
                    <div class="podium-lifts"><div><span>SQUAT</span><strong>370 <small>kg</small></strong></div><div><span>BENCH</span><strong>245 <small>kg</small></strong></div><div><span>DEADLIFT</span><strong>401.5 <small>kg</small></strong></div></div>
                    <div class="podium-total"><span>AGGREGATE TOTAL<strong>1,016.5 <small>KG</small></strong></span><span>DOTS COEFFICIENT<strong>568.9</strong></span></div>
                </article>
            </div>
        </section>

        <section class="athlete-standings" id="athlete-standings">
            <div class="leaderboard-section-heading"><div><h2>Master athlete standings</h2><p>Audited through certified meet sheets, calibrated video hashes, and peer bar telemetry.</p></div><span><i></i> PEER VERIFIED &nbsp; <b></b> VIDEO CALIBRATED</span></div>
            <div class="standings-table-wrap">
                <table class="standings-table">
                    <thead><tr><th>#</th><th>Lifter &amp; credentials</th><th>DIV / CLASS</th><th>SQUAT (KG)</th><th>BENCH (KG)</th><th>DEADLIFT (KG)</th><th>TOTAL (KG)</th><th>DOTS</th><th>MEET SANCTION</th><th>PROOF</th></tr></thead>
                    <tbody>
                        <tr class="standings-first"><td><strong>1</strong><i>↑</i></td><td><span class="lifters-initial">MV</span><span class="lifter-label"><strong>Marcus Vance <svg class="icon"><use href="#lb-shield"></use></svg></strong><small>@Vanguard_Beast &bull; Metropolitan Iron</small></span></td><td>105kg Raw</td><td>360.5 <small>kg</small></td><td>229 <small>kg</small></td><td>401.5 <small>kg</small></td><td><strong>991</strong></td><td><strong>582.4</strong></td><td>USAPL Nationals &rsquo;24<small>Salt Lake City, UT</small></td><td><svg class="icon"><use href="#lb-video"></use></svg></td></tr>
                        <tr><td><strong>2</strong><i>−</i></td><td><span class="lifters-initial">EK</span><span class="lifter-label"><strong>Elena Korov <svg class="icon"><use href="#lb-shield"></use></svg></strong><small>@Elena_K &bull; Apex Strength</small></span></td><td>82.5kg Raw</td><td>233.5 <small>kg</small></td><td>145 <small>kg</small></td><td>265.5 <small>kg</small></td><td><strong>644</strong></td><td><strong>574.1</strong></td><td>WRPF American Pro 2<small>Manassas, VA</small></td><td><svg class="icon"><use href="#lb-video"></use></svg></td></tr>
                        <tr><td><strong>3</strong><i>•</i></td><td><span class="lifters-initial">DS</span><span class="lifter-label"><strong>Dan Sullivan <svg class="icon"><use href="#lb-shield"></use></svg></strong><small>@BigDan_83 &bull; Iron Bastion</small></span></td><td>120kg+ Open</td><td>370 <small>kg</small></td><td>245 <small>kg</small></td><td>401.5 <small>kg</small></td><td><strong>1,016.5</strong></td><td><strong>568.9</strong></td><td>Ghost Invitational Meet<small>Detroit, MI</small></td><td><svg class="icon"><use href="#lb-video"></use></svg></td></tr>
                        <tr><td><strong>4</strong><i>↑</i></td><td><span class="lifters-initial">TL</span><span class="lifter-label"><strong>Tariq Lindqvist <svg class="icon"><use href="#lb-shield"></use></svg></strong><small>@Tariq_Squats &bull; Vanguard</small></span></td><td>93kg Raw</td><td>315 <small>kg</small></td><td>200 <small>kg</small></td><td>347.5 <small>kg</small></td><td><strong>862.5</strong></td><td><strong>562.1</strong></td><td>IPF Worlds Classic<small>Valletta, Malta</small></td><td><svg class="icon"><use href="#lb-video"></use></svg></td></tr>
                        <tr><td><strong>5</strong><i>↑</i></td><td><span class="lifters-initial">CA</span><span class="lifter-label"><strong>Chloe Alvarez <svg class="icon"><use href="#lb-shield"></use></svg></strong><small>@Chloe_Pulls &bull; Iron Haven</small></span></td><td>69kg Open</td><td>197.5 <small>kg</small></td><td>120 <small>kg</small></td><td>236 <small>kg</small></td><td><strong>553.5</strong></td><td><strong>558.7</strong></td><td>USAPL Raw Challenge<small>Columbus, OH</small></td><td><svg class="icon"><use href="#lb-video"></use></svg></td></tr>
                        <tr><td><strong>6</strong><i>−</i></td><td><span class="lifters-initial">JH</span><span class="lifter-label"><strong>Jaxon Holt <svg class="icon"><use href="#lb-shield"></use></svg></strong><small>@JaxonPress &bull; Metro Iron</small></span></td><td>105kg Raw</td><td>340 <small>kg</small></td><td>220 <small>kg</small></td><td>372 <small>kg</small></td><td><strong>932</strong></td><td><strong>551.3</strong></td><td>Texas State Open &rsquo;24<small>San Antonio, TX</small></td><td><svg class="icon"><use href="#lb-video"></use></svg></td></tr>
                        <tr><td><strong>7</strong><i>•</i></td><td><span class="lifters-initial">RW</span><span class="lifter-label"><strong>Rachel Weiss <svg class="icon"><use href="#lb-shield"></use></svg></strong><small>@Weiss_Barbell &bull; Black Iron</small></span></td><td>76kg Raw</td><td>213 <small>kg</small></td><td>134 <small>kg</small></td><td>247 <small>kg</small></td><td><strong>594</strong></td><td><strong>548.2</strong></td><td>Pacific Crest Classic<small>Seattle, WA</small></td><td><svg class="icon"><use href="#lb-video"></use></svg></td></tr>
                        <tr><td><strong>8</strong><i>↑</i></td><td><span class="lifters-initial">LN</span><span class="lifter-label"><strong>Lucas Novak <svg class="icon"><use href="#lb-shield"></use></svg></strong><small>@Novak_Iron &bull; Vanguard</small></span></td><td>120kg Raw</td><td>345 <small>kg</small></td><td>231 <small>kg</small></td><td>376.5 <small>kg</small></td><td><strong>952.5</strong></td><td><strong>545.6</strong></td><td>WRPF Iron Wars 2024<small>Orlando, FL</small></td><td><svg class="icon"><use href="#lb-video"></use></svg></td></tr>
                    </tbody>
                </table>
            </div>
            <div class="standings-foot"><span>Showing <strong>1&ndash;8</strong> of <strong>1,482</strong> verified powerlifters</span><nav aria-label="Standings pages"><a href="#athlete-standings">Previous</a><a class="is-active" href="#athlete-standings">1</a><a href="#athlete-standings">2</a><a href="#athlete-standings">3</a><span>&hellip;</span><a href="#athlete-standings">185</a><a href="#athlete-standings">Next</a></nav></div>
        </section>

        <section class="leaderboard-mobile-athletes" aria-label="Top athlete standings">
            <div class="leaderboard-section-heading"><div><h2>Master athlete standings</h2><p>Peer-verified meet totals</p></div><span><i></i> VERIFIED</span></div>
            <article class="mobile-athlete-card mobile-athlete-first"><span class="mobile-athlete-rank">#1</span><img src="/assets/img/marcus-vance.jpg" alt=""><div><strong>Marcus Vance <svg class="icon"><use href="#lb-shield"></use></svg></strong><small>@Vanguard_Beast &bull; 105kg Raw</small></div><b>991 <small>KG</small></b><span class="mobile-athlete-dots">582.4 DOTS</span><div class="mobile-athlete-lifts"><span><small>SQUAT</small>360.5kg</span><span><small>BENCH</small>229kg</span><span><small>DEADLIFT</small>401.5kg</span></div></article>
            <article class="mobile-athlete-card"><span class="mobile-athlete-rank">#2</span><span class="mobile-initial">EK</span><div><strong>Elena Korov <svg class="icon"><use href="#lb-shield"></use></svg></strong><small>@Elena_K &bull; 82.5kg Raw</small></div><b>644 <small>KG</small></b><span class="mobile-athlete-dots">574.1 DOTS</span><div class="mobile-athlete-lifts"><span><small>SQUAT</small>233.5kg</span><span><small>BENCH</small>145kg</span><span><small>DEADLIFT</small>265.5kg</span></div></article>
            <article class="mobile-athlete-card"><span class="mobile-athlete-rank">#3</span><span class="mobile-initial">DS</span><div><strong>Dan Sullivan <svg class="icon"><use href="#lb-shield"></use></svg></strong><small>@BigDan_83 &bull; 120kg+ Open</small></div><b>1,016.5 <small>KG</small></b><span class="mobile-athlete-dots">568.9 DOTS</span><div class="mobile-athlete-lifts"><span><small>SQUAT</small>370kg</span><span><small>BENCH</small>245kg</span><span><small>DEADLIFT</small>401.5kg</span></div></article>
            <article class="mobile-athlete-card"><span class="mobile-athlete-rank">#4</span><span class="mobile-initial">TL</span><div><strong>Tariq Lindqvist <svg class="icon"><use href="#lb-shield"></use></svg></strong><small>@Tariq_Squats &bull; 93kg Raw</small></div><b>862.5 <small>KG</small></b><span class="mobile-athlete-dots">562.1 DOTS</span><div class="mobile-athlete-lifts"><span><small>SQUAT</small>315kg</span><span><small>BENCH</small>200kg</span><span><small>DEADLIFT</small>347.5kg</span></div></article>
        </section>

        <div class="leaderboard-community-grid">
            <section class="community-karma" id="spotter-karma">
                <div class="community-panel-heading"><div><h2><i></i>Community spotter karma</h2><p>Top gear verifiers and referees reviewing knurl wear, plate tare scales, and lift compliance.</p></div><span>PEER AUDITORS</span></div>
                <ol class="karma-list">
                    <li><b>1</b><span class="karma-name"><strong>@Elena_K <svg class="icon"><use href="#lb-trophy"></use></svg></strong><small>Master Spotter &bull; 42 form checks</small></span><strong>840 <small>PTS</small></strong></li>
                    <li><b>2</b><span class="karma-name"><strong>@Marcus_K <svg class="icon"><use href="#lb-dumbbell"></use></svg></strong><small>IPF National Ref &bull; 98 calibrations</small></span><strong>610 <small>PTS</small></strong></li>
                    <li><b>3</b><span class="karma-name"><strong>@DaveLiftz <svg class="icon"><use href="#lb-medal"></use></svg></strong><small>Knurl Lab Auditor &bull; 6 lab logs</small></span><strong>512 <small>PTS</small></strong></li>
                    <li><b>4</b><span class="karma-name"><strong>@TaraRacks <svg class="icon"><use href="#lb-video"></use></svg></strong><small>Strength Coach &bull; 52 reviews</small></span><strong>420 <small>PTS</small></strong></li>
                    <li><b>5</b><span class="karma-name"><strong>@BigDan_83 <svg class="icon"><use href="#lb-clock"></use></svg></strong><small>Equipment Spotter &bull; 4 audits</small></span><strong>380 <small>PTS</small></strong></li>
                </ol>
                <div class="karma-note"><svg class="icon"><use href="#lb-info"></use></svg><p><strong>How Spotter Karma Works</strong><br>Earn +10 pts for verified video form reviews, +25 pts for calibrated plate scale submissions, and +50 pts for new sanctuary hardware inventories vetted by community peers.</p></div>
            </section>

            <section class="sanctuary-rankings" id="top-sanctuaries">
                <div class="community-panel-heading"><div><h2><i></i>Top rated strength sanctuaries</h2><p>Ranked by authenticated barbell specs, calibrated combo rack density, and member grip scores.</p></div><a href="/gear">EXPLORE ALL <svg class="icon"><use href="#lb-arrow"></use></svg></a></div>
                <ol class="sanctuary-list">
                    <li><b>#1</b><span><strong>Metropolitan Iron Club <svg class="icon"><use href="#lb-shield"></use></svg></strong><small>Austin, TX &bull; 18 Combo Racks &bull; 6 Comp Benches</small></span><span class="sanctuary-score"><strong>99.8</strong><small>340 REVIEWS</small></span></li>
                    <li><b>#2</b><span><strong>Vanguard Barbell Co. <svg class="icon"><use href="#lb-shield"></use></svg></strong><small>East Austin, TX &bull; 4 Monolifts &bull; Calibrated Ivanko</small></span><span class="sanctuary-score"><strong>99.4</strong><small>288 REVIEWS</small></span></li>
                    <li><b>#3</b><span><strong>Apex Strength &amp; Conditioning <svg class="icon"><use href="#lb-shield"></use></svg></strong><small>Columbus, OH &bull; 10 Power Cages &bull; TSS Benches</small></span><span class="sanctuary-score"><strong>99.1</strong><small>412 REVIEWS</small></span></li>
                    <li><b>#4</b><span><strong>Iron Haven Compound</strong><small>Columbus, OH &bull; Texas Power Bars &bull; Eleiko IWF</small></span><span class="sanctuary-score"><strong>98.7</strong><small>310 REVIEWS</small></span></li>
                    <li><b>#5</b><span><strong>Black Iron Bastion</strong><small>Seattle, WA &bull; 10 Full Cages &bull; Calibrated Rogue KG</small></span><span class="sanctuary-score"><strong>98.5</strong><small>240 REVIEWS</small></span></li>
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
</body>
</html>
