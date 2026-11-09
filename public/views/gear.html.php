<?php

declare(strict_types=1);

$iconPrefix = 'gear';
$desktopHeaderComponent = [
    'class' => 'site-header gear-site-header',
    'navigationClass' => 'main-nav gear-desktop-nav',
    'activePage' => 'gear',
    'singleLineNavigation' => false,
    'searchHref' => '#hardware-index',
    'searchLabel' => 'Browse hardware index',
];
$mobileHeaderComponent = [
    'headerClass' => 'gear-mobile-header page-mobile-header',
    'brandClass' => 'gear-mobile-brand page-mobile-brand',
    'liveClass' => 'gear-live page-live-badge',
];
$mobileNavComponent = [
    'class' => 'gear-mobile-nav page-mobile-nav',
    'activePage' => 'gear',
    'items' => [
        ['href' => '/leaderboard', 'page' => 'leaderboard', 'icon' => 'board', 'label' => 'BOARD'],
        ['href' => '/forum', 'page' => 'forum', 'icon' => 'forum', 'label' => 'FORUM'],
        ['href' => '/gear', 'page' => 'gear', 'icon' => 'dumbbell', 'label' => 'GEAR'],
        ['href' => '/submit-gym', 'page' => 'submit-gym', 'icon' => 'pin', 'label' => 'SUBMIT'],
    ],
];
$footerComponent = [
    'class' => 'gear-footer page-footer',
    'gridClass' => 'gear-container gear-footer-top page-footer-grid',
    'brandClass' => 'gear-footer-brand page-footer-brand',
    'logoClass' => 'brand',
    'logoMarkClass' => 'brand-mark',
    'logoTextClass' => 'brand-text',
    'description' => 'High-performance telemetry and facility intelligence for strength sports. Real-time rack occupancy, calibrated plate tracking, and authentic powerlifting & weightlifting community culture.',
    'networkTag' => 'span',
    'boldNetworkSeparator' => false,
    'headingTag' => 'strong',
    'showSystemDot' => false,
    'bottomClass' => 'gear-container gear-footer-bottom page-footer-bottom',
    'columns' => [
        ['heading' => 'DISCOVERY', 'links' => [
            ['href' => '/', 'label' => 'Gym Directory'],
            ['href' => '#hardware-index', 'label' => 'Calibrated Gear'],
            ['href' => '#featured-manifests', 'label' => 'Facility Rankings'],
            ['href' => '/submit-gym', 'label' => 'Submit Strength Hub'],
        ]],
        ['heading' => 'COMMUNITY HUB', 'links' => [
            ['href' => '/forum', 'label' => 'Discussion Boards'],
            ['href' => '/forum#discussion-meet-debrief', 'label' => 'Meet Preparation'],
            ['href' => '/forum#discussion-gear-review', 'label' => 'Barbell Calibration Logs'],
            ['href' => '/leaderboard#spotter-karma', 'label' => 'Coach Directory'],
        ]],
        ['heading' => 'TELEMETRY & LEGAL', 'links' => [
            ['href' => '#audit-entry', 'label' => 'Terms of Service'],
            ['href' => '#audit-entry', 'label' => 'Privacy Policy'],
            ['href' => '#hardware-index', 'label' => 'Hardware Specs & API'],
            ['href' => '#featured-manifests', 'label' => 'Live System Status'],
        ]],
    ],
];
$gearData = require __DIR__ . '/gear-data.php';
?>
<svg class="icon-sprite" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg">
    <symbol id="gear-dumbbell" viewBox="0 0 24 24"><path d="M3 9v6M6.5 7v10M17.5 7v10M21 9v6M6.5 12h11"/></symbol>
    <symbol id="gear-search" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m20 20-4-4"/></symbol>
    <symbol id="gear-pin" viewBox="0 0 24 24"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></symbol>
    <symbol id="gear-shield" viewBox="0 0 24 24"><path d="m12 3 8 3v5.5c0 5-3.4 8.2-8 9.5-4.6-1.3-8-4.5-8-9.5V6l8-3Z"/><path d="m8.5 12 2.4 2.4 4.6-5"/></symbol>
    <symbol id="gear-check" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="m8.5 12.2 2.4 2.4 4.6-5"/></symbol>
    <symbol id="gear-arrow" viewBox="0 0 24 24"><path d="M4 12h15m-6-6 6 6-6 6"/></symbol>
    <symbol id="gear-bars" viewBox="0 0 24 24"><path d="M3 9v6M6 6v12M18 6v12M21 9v6M6 12h12"/></symbol>
    <symbol id="gear-bench" viewBox="0 0 24 24"><path d="M4 8h13v6H4zM7 14v5m8-5v5m2-8h3v3h-3M4 19h14"/></symbol>
    <symbol id="gear-rack" viewBox="0 0 24 24"><path d="M5 3v18M19 3v18M5 7h14M5 16h14M8 7v9m8-9v9"/></symbol>
    <symbol id="gear-weight" viewBox="0 0 24 24"><path d="M3 9v6m3-9v12m12-12v12m3-9v6M6 12h12"/></symbol>
    <symbol id="gear-scale" viewBox="0 0 24 24"><rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 8a4 4 0 0 1 8 0m-4 0 2-2"/></symbol>
    <symbol id="gear-filter" viewBox="0 0 24 24"><path d="M4 7h16M7 12h10m-7 5h4"/><circle cx="8" cy="7" r="1.5"/><circle cx="15" cy="12" r="1.5"/></symbol>
    <symbol id="gear-download" viewBox="0 0 24 24"><path d="M12 3v12m-5-5 5 5 5-5M4 19v2h16v-2"/></symbol>
    <symbol id="gear-camera" viewBox="0 0 24 24"><path d="M4 7h3l2-3h6l2 3h3a2 2 0 0 1 2 2v10H2V9a2 2 0 0 1 2-2Z"/><circle cx="12" cy="13" r="3"/></symbol>
    <symbol id="gear-user" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4.5 21a7.5 7.5 0 0 1 15 0"/></symbol>
    <symbol id="gear-board" viewBox="0 0 24 24"><path d="M8 21h8m-4-4v4M5 4h14v9a7 7 0 0 1-14 0V4Zm0 3H2v3a5 5 0 0 0 5 5m12-8h3v3a5 5 0 0 1-5 5"/></symbol>
    <symbol id="gear-forum" viewBox="0 0 24 24"><path d="M21 11.5a7.5 7.5 0 0 1-7.5 7.5H8l-5 3 1.3-4.6A8.5 8.5 0 1 1 21 11.5Z"/></symbol>
    <symbol id="gear-plus" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></symbol>
</svg>

<?php
require __DIR__ . '/components/desktop-header.html.php';
require __DIR__ . '/components/mobile-header.html.php';
?>

<main class="gear-main">
    <div class="gear-container">
        <section class="gear-intro">
            <div class="gear-breadcrumb"><span>REGISTRY // SYS-719</span><span>/</span><strong>HARDWARE MANIFEST v4.12</strong></div>
            <div class="gear-intro-row">
                <div>
                    <span class="gear-kicker"><svg class="icon"><use href="#gear-shield"></use></svg>GEAR INVENTORY &amp; AUDIT REGISTRY</span>
                    <h1>Verified equipment inventory &amp; hardware manifest</h1>
                    <p>Audited telemetry catalog tracking competition combo racks, calibrated steel, specialty barbells, and monolifts across global powerlifting sanctuaries and weightlifting dens. Verified by athlete photographic evidence and serial stamp checks.</p>
                </div>
                <div class="gear-intro-actions">
                    <a class="gear-button gear-button-primary" href="#audit-entry"><svg class="icon"><use href="#gear-plus"></use></svg>Submit gear audit</a>
                    <a class="gear-button gear-button-secondary" href="#hardware-index"><svg class="icon"><use href="#gear-download"></use></svg>Export CSV</a>
                </div>
            </div>
        </section>

        <section class="gear-summary" aria-label="Inventory summary">
            <?php foreach ($gearData['metrics'] as $metric): ?>
                <?php require __DIR__ . '/components/gear-summary-metric.html.php'; ?>
            <?php endforeach; ?>
        </section>

        <section class="gear-search-panel" aria-label="Search equipment inventory">
            <form class="gear-search-form" action="/gear" method="get">
                <label class="gear-search-input">
                    <svg class="icon"><use href="#gear-search"></use></svg>
                    <input type="search" name="q" placeholder="Search equipment brand, model, bar type, or gym facility (e.g. &quot;Eleiko IPF Combo&quot;, &quot;Kabuki Transformer&quot;, &quot;Ivanko Calibrated&quot;, &quot;Austin&quot;)..." aria-label="Search equipment inventory">
                    <span class="search-hint">PRESS<br><kbd>⌘K</kbd></span>
                </label>
                <a class="gear-reset" href="/gear"><svg class="icon"><use href="#gear-filter"></use></svg>Reset all</a>
            </form>
            <nav class="gear-category-tabs" aria-label="Equipment categories">
                <a class="is-active" href="#featured-manifests">ALL GEAR CATEGORIES (14,218)</a>
                <a href="#hardware-index">COMBO RACKS &amp; CAGES (4,150)</a>
                <a href="#hardware-index">COMPETITION BENCHES (8,420)</a>
                <a href="#hardware-index">DEADLIFT PLATFORMS &amp; JACKS (3,800)</a>
                <a href="#hardware-index">SPECIALTY &amp; POWER BARS (1,290)</a>
            </nav>
            <div class="gear-filter-grid">
                <label>SPECIFICATION PROTOCOL
                    <select aria-label="Specification protocol"><option>All Specifications</option><option>IPF approved</option><option>Competition spec</option></select>
                </label>
                <label>MANUFACTURER / BRAND
                    <select aria-label="Manufacturer or brand"><option>All Major Brands (72+)</option><option>Eleiko</option><option>Rogue</option><option>Texas Strength Systems</option></select>
                </label>
                <label>MINIMUM UNITS IN FACILITY
                    <select aria-label="Minimum units in facility"><option>Any Quantity (1+)</option><option>5+ units</option><option>10+ units</option></select>
                </label>
                <label>METRO REGION
                    <select aria-label="Metro region"><option>Global Sanctuaries</option><option>Austin, TX</option><option>Columbus, OH</option></select>
                </label>
            </div>
        </section>

        <section class="gear-mobile-overview" aria-label="Gear inventory overview">
            <div class="mobile-overview-metric"><span class="mobile-metric-icon"><svg class="icon"><use href="#gear-weight"></use></svg></span><strong>1.9M <small>KG</small><span>CALIBRATED PLATES</span></strong></div>
            <div class="mobile-overview-metric"><span class="mobile-metric-icon mobile-metric-blue"><svg class="icon"><use href="#gear-pin"></use></svg></span><strong>142 <small>LOC</small><span>IRON SANCTUARIES</span></strong></div>
        </section>

        <form class="gear-mobile-search" action="/gear" method="get">
            <svg class="icon"><use href="#gear-search"></use></svg>
            <input type="search" name="q" placeholder="Barbell model, facility, calibrated plates..." aria-label="Search barbell models and facilities">
        </form>

        <nav class="gear-mobile-categories" aria-label="Equipment categories">
            <a class="is-active" href="#featured-manifests"><svg class="icon"><use href="#gear-filter"></use></svg>All hardware</a>
            <a href="#hardware-index"><svg class="icon"><use href="#gear-bars"></use></svg>Power bars</a>
            <a href="#hardware-index"><svg class="icon"><use href="#gear-scale"></use></svg>Calibrated steel</a>
        </nav>

        <section class="gear-knurl" aria-labelledby="knurl-heading">
            <div class="gear-knurl-heading">
                <h2 id="knurl-heading"><svg class="icon"><use href="#gear-bars"></use></svg>Knurl spec registry</h2>
                <span>2 Verified Stems</span>
            </div>
            <div class="knurl-grid">
                <?php foreach ($gearData['knurl'] as $knurl): ?>
                    <?php require __DIR__ . '/components/gear-knurl-card.html.php'; ?>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="gear-featured" id="featured-manifests">
            <div class="gear-section-heading">
                <div><span class="gear-section-kicker"><svg class="icon"><use href="#gear-bars"></use></svg>SANCTUARY ROSTERS &bull; HARDWARE MANIFESTS</span><h2>Featured facility gear manifests</h2><p>Live audited rosters from top-ranking strength facilities. Every item is verified via timestamped knurl photos, barbell spin tests, and serial numbers.</p></div>
                <span class="gear-display-mode">DISPLAY MODE: <strong>HIGH-DENSITY COMPARISON</strong></span>
            </div>

            <div class="facility-manifests">
                <?php foreach ($gearData['manifests'] as $manifest): ?>
                    <?php require __DIR__ . '/components/gear-manifest-card.html.php'; ?>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="gear-hardware" id="hardware-index">
            <div class="gear-section-heading">
                <div><span class="gear-section-kicker">HARDWARE REGISTRY AUDIT MATRIX</span><h2>Master hardware index</h2><p>Global index of sanctioned strength hardware, tolerance specs, and verified gym stock counts.</p></div>
                <span class="gear-display-mode"><svg class="icon"><use href="#gear-filter"></use></svg>SORT: MOST DEPLOYED</span>
            </div>
            <div class="hardware-table-wrap">
                <table class="hardware-table">
                    <thead><tr><th>Equipment &amp; hardware item</th><th>Manufacturer</th><th>Technical specification</th><th>Knurl / tolerance rating</th><th>Facilities indexed</th><th>Audit status</th></tr></thead>
                    <tbody>
                        <?php foreach ($gearData['hardware'] as $item): ?>
                            <?php require __DIR__ . '/components/gear-hardware-row.html.php'; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="gear-audit" id="audit-entry">
            <div class="audit-copy">
                <span class="gear-section-kicker"><svg class="icon"><use href="#gear-shield"></use></svg>IRONPULSE AUDIT PROTOCOL</span>
                <h2>Train at a gym with unlisted or upgraded iron?</h2>
                <p>Contribute to the decentralized hardware manifest. Submit photographic proof of plate calibration stamps, barbell knurling and-brand specs, or newly added competition combo racks. Earn verified auditor karma and community credibility.</p>
                <div class="audit-benefits"><span><strong>+50</strong><small>AUDITOR KARMA</small></span><span><strong>◉ TIER 1</strong><small>VERIFIED BADGE</small></span><span><strong>◷ &lt;4 HRS</strong><small>TELEMETRY SYNC</small></span></div>
                <ul><li>Must attach photo of barbell endcap showing brand/spec stamp</li><li>Plate calibration verification requires photograph of stamp &amp; weight tolerance</li><li>Dual community peer verification required before roster lock</li></ul>
            </div>
            <form class="audit-form" action="/gear" method="get">
                <div class="audit-form-heading"><h3>Submit hardware audit entry</h3><strong>FORM // AUDIT-04</strong></div>
                <label>GYM / FACILITY NAME &amp; METRO<input type="text" placeholder="e.g. Austin Strength Lab, Austin TX"></label>
                <div class="audit-form-row"><label>EQUIPMENT CATEGORY<select><option>Competition Combo Rack</option><option>Barbell</option><option>Calibrated plates</option></select></label><label>MANUFACTURER / MODEL<input type="text" placeholder="e.g. Eleiko IPF Spec or TSS"></label></div>
                <div class="audit-form-row"><label>QUANTITY ON DECK<input type="number" min="1" value="1"></label><label>KNURL / STEEL CONDITION<input type="text" placeholder="Mint / Aggressive Volcano Bite"></label></div>
                <label class="audit-upload"><input type="file" accept="image/jpeg,image/png,image/webp"><svg class="icon"><use href="#gear-camera"></use></svg><strong>Upload stamp verification</strong><span>JPG, PNG or WEBP up to 15MB</span></label>
                <button class="gear-button gear-button-primary" type="button"><svg class="icon"><use href="#gear-arrow"></use></svg>Transmit equipment audit (+50 karma)</button>
            </form>
        </section>

        <aside class="gear-mobile-report">
            <div class="mobile-report-heading"><span><svg class="icon"><use href="#gear-check"></use></svg></span><div><strong>Report Gear Wear / Calibration</strong><small>Spotted dull knurling or unverified plates?</small></div><b>+25 KARMA</b></div>
            <a class="gear-button gear-button-primary" href="#audit-entry"><svg class="icon"><use href="#gear-camera"></use></svg>Submit telemetry audit</a>
        </aside>
    </div>
</main>

<?php
require __DIR__ . '/components/footer.html.php';
require __DIR__ . '/components/mobile-nav.html.php';
?>
