<?php

declare(strict_types=1);

$iconPrefix = 'sg';
$desktopHeaderComponent = [
    'class' => 'site-header sg-desktop-header',
    'navigationClass' => 'main-nav',
    'activePage' => 'submit-gym',
    'singleLineNavigation' => true,
    'searchHref' => '#facility-identity',
    'searchLabel' => 'Go to facility identity',
];
$mobileHeaderComponent = [
    'headerClass' => 'sg-mobile-header page-mobile-header',
    'brandClass' => 'sg-mobile-brand page-mobile-brand',
    'liveClass' => 'sg-live page-live-badge',
];
$mobileNavComponent = [
    'class' => 'sg-mobile-nav page-mobile-nav',
    'activePage' => 'submit-gym',
    'items' => [
        ['href' => '/leaderboard', 'page' => 'leaderboard', 'icon' => 'trophy', 'label' => 'BOARD'],
        ['href' => '/forum', 'page' => 'forum', 'icon' => 'forum', 'label' => 'FORUM'],
        ['href' => '/gear', 'page' => 'gear', 'icon' => 'dumbbell', 'label' => 'GEAR'],
        ['href' => '/submit-gym', 'page' => 'submit-gym', 'icon' => 'pin', 'label' => 'SUBMIT'],
    ],
];
$footerComponent = [
    'class' => 'sg-footer page-footer',
    'gridClass' => 'sg-container sg-footer-grid page-footer-grid',
    'brandClass' => 'sg-footer-brand page-footer-brand',
    'logoClass' => 'sg-footer-logo',
    'logoMarkClass' => '',
    'logoTextClass' => '',
    'description' => 'High-performance telemetry and facility intelligence for strength sports. Real-time rack occupancy, calibrated plate tracking, and authentic powerlifting and weightlifting community culture.',
    'networkTag' => 'small',
    'boldNetworkSeparator' => false,
    'headingTag' => 'b',
    'showSystemDot' => false,
    'bottomClass' => 'sg-container sg-footer-bottom page-footer-bottom',
    'columns' => [
        ['heading' => 'DISCOVERY', 'links' => [
            ['href' => '/', 'label' => 'Gym Directory'],
            ['href' => '/gear', 'label' => 'Calibrated Gear'],
            ['href' => '/leaderboard', 'label' => 'Facility Rankings'],
            ['href' => '/submit-gym', 'label' => 'Submit Strength Hub'],
        ]],
        ['heading' => 'COMMUNITY HUB', 'links' => [
            ['href' => '/forum', 'label' => 'Discussion Boards'],
            ['href' => '/forum#discussion-meet-debrief', 'label' => 'Meet Preparation'],
            ['href' => '/forum#discussion-gear-review', 'label' => 'Barbell Calibration Logs'],
            ['href' => '/leaderboard#spotter-karma', 'label' => 'Coach Directory'],
        ]],
        ['heading' => 'TELEMETRY & LEGAL', 'links' => [
            ['href' => '/submit-gym', 'label' => 'Terms of Service'],
            ['href' => '/submit-gym', 'label' => 'Privacy Policy'],
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
    <meta name="description" content="Submit an independent strength sanctuary for a peer-verified IronPulse hardware audit.">
    <title><?= htmlspecialchars((string) $pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%230b1326'/%3E%3Cpath d='M7 12v8M10 9v14M22 9v14M25 12v8M10 16h12' stroke='%23c3f400' stroke-width='2' stroke-linecap='round'/%3E%3C/svg%3E">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/page-components.css">
    <link rel="stylesheet" href="/css/submit-gym.css">
</head>
<body class="submit-gym-page">
<svg class="icon-sprite" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg">
    <symbol id="sg-dumbbell" viewBox="0 0 24 24"><path d="M3 9v6M6.5 7v10M17.5 7v10M21 9v6M6.5 12h11"/></symbol>
    <symbol id="sg-user" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4.5 21a7.5 7.5 0 0 1 15 0"/></symbol>
    <symbol id="sg-search" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m20 20-4-4"/></symbol>
    <symbol id="sg-shield" viewBox="0 0 24 24"><path d="m12 3 8 3v5.5c0 5-3.4 8.2-8 9.5-4.6-1.3-8-4.5-8-9.5V6l8-3Z"/><path d="m8.5 12 2.4 2.4 4.6-5"/></symbol>
    <symbol id="sg-pin" viewBox="0 0 24 24"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></symbol>
    <symbol id="sg-plus" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></symbol>
    <symbol id="sg-check" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="m8.5 12.2 2.4 2.4 4.6-5"/></symbol>
    <symbol id="sg-bars" viewBox="0 0 24 24"><path d="M3 9v6M6.5 7v10M17.5 7v10M21 9v6M6.5 12h11"/></symbol>
    <symbol id="sg-rack" viewBox="0 0 24 24"><path d="M5 3v18M19 3v18M5 7h14M5 16h14M8 7v9m8-9v9"/></symbol>
    <symbol id="sg-weight" viewBox="0 0 24 24"><path d="M3 9v6m3-9v12m12-12v12m3-9v6M6 12h12"/></symbol>
    <symbol id="sg-scale" viewBox="0 0 24 24"><path d="M12 3v18m-8-4h16M6 17l-3 4m15-4 3 4M5 9c0-2 3-4 7-4s7 2 7 4M4 9l-2 5h5L4 9Zm16 0-3 5h5l-2-5Z"/></symbol>
    <symbol id="sg-camera" viewBox="0 0 24 24"><path d="M4 7h3l2-3h6l2 3h3a2 2 0 0 1 2 2v10H2V9a2 2 0 0 1 2-2Z"/><circle cx="12" cy="13" r="3"/></symbol>
    <symbol id="sg-upload" viewBox="0 0 24 24"><path d="M12 16V4m-5 5 5-5 5 5M4 17v3h16v-3"/></symbol>
    <symbol id="sg-clock" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></symbol>
    <symbol id="sg-trophy" viewBox="0 0 24 24"><path d="M8 4h8v5a4 4 0 0 1-8 0V4ZM8 5H4v2a4 4 0 0 0 4 4m8-6h4v2a4 4 0 0 1-4 4m-4 2v5m-4 3h8m-7-3h6"/></symbol>
    <symbol id="sg-key" viewBox="0 0 24 24"><circle cx="8" cy="15" r="5"/><path d="m11.5 11.5 8-8 2 2-2 2 2 2-3 3-2-2-2 2"/></symbol>
    <symbol id="sg-warning" viewBox="0 0 24 24"><path d="m12 3 10 18H2L12 3Z"/><path d="M12 9v5m0 3h.01"/></symbol>
    <symbol id="sg-forum" viewBox="0 0 24 24"><path d="M21 11.5a7.5 7.5 0 0 1-7.5 7.5H8l-5 3 1.3-4.6A8.5 8.5 0 1 1 21 11.5Z"/></symbol>
</svg>

<?php
require __DIR__ . '/components/desktop-header.html.php';
require __DIR__ . '/components/mobile-header.html.php';
?>

<main class="sg-main">
    <div class="sg-container">
        <div class="sg-system-bar">
            <div><span class="sg-system-id"><i></i>SYS-SUBMIT V3.1</span><span>VERIFICATION PROTOCOL // HARDWARE INTAKE</span><span class="sg-independent"><i></i>100% INDEPENDENT AUDIT</span></div>
            <div><span><svg class="icon"><use href="#sg-clock"></use></svg>AVG DISPATCH LATENCY: 18 HOURS</span><span class="sg-karma"><svg class="icon"><use href="#sg-trophy"></use></svg>KARMA BOUNTY: +250 PTS</span></div>
        </div>

        <section class="sg-hero">
            <div>
                <span class="sg-kicker"><svg class="icon"><use href="#sg-pin"></use></svg>SANCTUARY INTAKE / PEER AUDIT PROTOCOL</span>
                <h1>Submit a sanctuary:<br>hardware audit</h1>
                <p>Register an underground powerlifting warehouse, weightlifting bunker, or hardcore strength facility into the IronPulse hardware-verified manifest. Real-time rack counts, calibrated steel logs, zero commercial fluff.</p>
            </div>
            <aside class="sg-dispatch-card">
                <svg class="icon"><use href="#sg-shield"></use></svg>
                <div><strong>HARDWARE DISPATCH POOL</strong><b>Peer Verification System</b><span>Calibrated tolerance checked within 48h</span></div>
                <i></i>
            </aside>
        </section>

        <section class="sg-metrics" aria-label="Audit program statistics">
            <article><span>INDEXED SANCTUARIES</span><strong>1,842</strong><small><b>98.4%</b> Hardware Verified</small><svg class="icon"><use href="#sg-pin"></use></svg></article>
            <article><span>SUBMITTER REWARD</span><strong>+250</strong><small>Karma on Manifest Approval</small><svg class="icon"><use href="#sg-trophy"></use></svg></article>
            <article><span>COMMERCIAL FILTER</span><strong>ZERO FLUFF</strong><small>Commercial chains auto-rejected</small><svg class="icon"><use href="#sg-warning"></use></svg></article>
            <article><span>PEER DISPATCH SLA</span><strong>48H MAX</strong><small>Local lifter on-site validation</small><svg class="icon"><use href="#sg-clock"></use></svg></article>
        </section>

        <nav class="sg-steps" aria-label="Audit sections">
            <a class="is-active" href="#facility-identity"><span>01</span><span><b>ACTIVE PROTOCOL</b><small>Facility &amp; Location</small></span></a>
            <a href="#hardware-armory"><span>02</span><span><b>HARDWARE MANIFEST</b><small>Armory &amp; Calibrated Spec</small></span></a>
            <a href="#culture-codes"><span>03</span><span><b>CULTURE CODES</b><small>Chalk, Deadlifts &amp; Access</small></span></a>
            <a href="#verification-media"><span>04</span><span><b>TELEMETRY PROOF</b><small>Knurl &amp; Stamp Photos</small></span></a>
        </nav>

        <div class="sg-layout">
            <div class="sg-form-column">
                <section class="sg-panel sg-section" id="facility-identity">
                    <div class="sg-section-heading">
                        <div class="sg-section-number"><svg class="icon"><use href="#sg-pin"></use></svg></div>
                        <div><span>SECTION 01 // IDENTITY AUDIT</span><h2>Facility Identity &amp; Metro Anchor</h2></div>
                        <b class="sg-required">MANDATORY</b>
                    </div>
                    <div class="sg-fields">
                        <label class="sg-field sg-field-wide">Sanctuary Legal / Underground Name<input type="text" value="Black Mountain Strength Compound" autocomplete="organization"></label>
                        <label class="sg-field sg-field-wide">Street Address<input type="text" value="4820 E 7th St, Suite B" autocomplete="street-address"></label>
                        <label class="sg-field">City &amp; State<input type="text" value="Austin, TX" autocomplete="address-level2"></label>
                        <label class="sg-field">Postal Code / Metro Hub<input type="text" value="78702" autocomplete="postal-code"></label>
                    </div>
                    <fieldset class="sg-classification">
                        <legend>Sanctuary Classification</legend>
                        <label><input type="radio" name="facility-type" checked><span><b>Underground Warehouse / 24/7 Keycard</b><small>Fob-based access, industrial zone, no commercial policies</small></span></label>
                        <label><input type="radio" name="facility-type"><span><b>Sanctioned Meet Venue</b><small>USAPL / IPF / WRPF certified platforms and calibrated weigh-in station</small></span></label>
                        <label><input type="radio" name="facility-type"><span><b>Hardcore Powerlifting &amp; Strongman Club</b><small>Atlas stones, yokes, logs, mono, metal plates</small></span></label>
                        <label><input type="radio" name="facility-type"><span><b>Olympic Weightlifting Bunker</b><small>Full Wolfwood insert decks, Eleiko bearing bars, jerk blocks</small></span></label>
                    </fieldset>
                    <div class="sg-fields sg-fields-bottom">
                        <label class="sg-field">Floor Footprint<input type="number" value="700" min="1"><span class="sg-unit">SQ M</span></label>
                        <label class="sg-field">Active Member Cap<input type="number" value="180" min="1"><span class="sg-unit">LIFTERS</span></label>
                        <label class="sg-field">Your Submitter Role<select><option>Competitive Athlete / Member</option><option>Facility Owner / Staff</option><option>Independent Auditor</option></select></label>
                    </div>
                </section>

                <section class="sg-panel sg-section" id="hardware-armory">
                    <div class="sg-section-heading">
                        <div class="sg-section-number"><svg class="icon"><use href="#sg-bars"></use></svg></div>
                        <div><span>SECTION 02 // CORE TELEMETRY</span><h2>Hardware Manifest &amp; Barbell Armory Audit</h2></div>
                        <b class="sg-weight-badge">AUDIT WEIGHT: 60%</b>
                    </div>
                    <div class="sg-count-grid">
                        <label>Competition Benches<input type="number" value="6" min="0"></label>
                        <label>Monolifts &amp; Rigs<input type="number" value="3" min="0"></label>
                        <label>Deadlift Platforms<input type="number" value="8" min="0"></label>
                    </div>
                    <div class="sg-subheading"><div><strong>Barbell Armory Knurl Verification</strong><span>VERIFIED MODEL / SPEC</span></div><b>PRECISION TOLERANCE</b></div>
                    <div class="sg-bar-table-wrap">
                        <table class="sg-bar-table">
                            <thead><tr><th>Barbell model / spec</th><th>Verified count</th><th>Knurl condition</th><th>Center knurl</th></tr></thead>
                            <tbody>
                                <tr><td>Texas Power Bar (Original Buddy Capps, 28.5mm)</td><td><input aria-label="Texas Power Bar count" type="number" value="12" min="0"></td><td><span class="sg-tag sg-tag-lime">AGGRESSIVE VOLCANO</span></td><td>Yes (IPF)</td></tr>
                                <tr><td>Eleiko IPF Competition Powerlifting Bar (29mm)</td><td><input aria-label="Eleiko bar count" type="number" value="6" min="0"></td><td><span class="sg-tag sg-tag-blue">SHARP MOUNTAIN</span></td><td>Yes (IPF Certified)</td></tr>
                                <tr><td>Deadlift Specialty Bars (Okie / Texas Deadlift / Ohio DL 27mm)</td><td><input aria-label="Deadlift specialty bar count" type="number" value="8" min="0"></td><td><span class="sg-tag sg-tag-blue">HIGH WHIP / AGGRESSIVE</span></td><td>Smooth Center</td></tr>
                                <tr><td>Kabuki Transformer &amp; Buffalo Specialty Bars</td><td><input aria-label="Kabuki specialty bar count" type="number" value="4" min="0"></td><td><span class="sg-tag">BLENDED MULTI-ANGLE</span></td><td>N/A</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="sg-calibrated">
                        <div class="sg-subheading"><div><strong>Calibrated Steel Plate Inventory</strong><span>CALIBRATED KG <i></i> LBS STEEL</span></div></div>
                        <div class="sg-plate-content">
                            <div><span>CALIBRATED BRANDS VERIFIED</span><div class="sg-brand-chips"><label><input type="checkbox" checked> ELEIKO</label><label><input type="checkbox" checked> IVANKO</label><label><input type="checkbox"> ROGUE KG</label><label><input type="checkbox"> HANSU</label></div></div>
                            <label class="sg-total-kg">TOTAL CALIBRATED WEIGHT AVAILABLE<input type="number" value="18450" min="0"><span>KG</span></label>
                            <label class="sg-tolerance">SCALE WEIGHT TOLERANCE CERTIFICATION<select><option>±10g Certified</option><option>±25g Certified</option><option>Not yet certified</option></select></label>
                        </div>
                    </div>
                    <div class="sg-accessories">
                        <label>Reverse Hypers<input type="number" value="3" min="0"><small>Westside Barbell Licensed</small></label>
                        <label>Belt Squats<input type="number" value="2" min="0"><small>Pit Shark &amp; SquatMax-MD</small></label>
                        <label>GHD Units<input type="number" value="4" min="0"><small>Rogue Monster</small></label>
                        <label>Dumbbell Peak<input type="number" value="90" min="0"><small>KG &bull; Solid Urethane / Cast Iron</small></label>
                    </div>
                </section>

                <section class="sg-panel sg-section" id="culture-codes">
                    <div class="sg-section-heading">
                        <div class="sg-section-number"><svg class="icon"><use href="#sg-check"></use></svg></div>
                        <div><span>SECTION 03 // ETHOS AUDIT</span><h2>Culture, Chalk, &amp; Music Protocols</h2></div>
                        <b class="sg-neutral-badge">LIFTER FREEDOM</b>
                    </div>
                    <div class="sg-culture-grid">
                        <fieldset><legend>Chalk Protocol</legend><label><input type="checkbox" checked> Raw Powder Chalk Barrels Provided Everywhere (Free)</label><label><input type="checkbox" checked> Chalk Allowed (Bring Your Own Block)</label><label><input type="checkbox"> Liquid Chalk Only (Requires Flag Explanation)</label></fieldset>
                        <fieldset><legend>Deadlift Drop Allowance</legend><label><input type="checkbox" checked> Deadlift Drops Permitted from Lockout without Warning</label><label><input type="checkbox" checked> Ammonia / Smelling Salts Permitted on Lifting Platform</label><label><input type="checkbox"> Barefoot / Deadlift Slippers Encouraged</label></fieldset>
                        <label class="sg-culture-input">Acoustic Authority<input type="text" value="Lifter-Controlled Spotify / Metal / Hardcore"></label>
                        <label class="sg-culture-input">Access Architecture<input type="text" value="24/7 RFID Fob / Mobile NFC Reader Access"></label>
                    </div>
                </section>

                <section class="sg-panel sg-section" id="verification-media">
                    <div class="sg-section-heading">
                        <div class="sg-section-number"><svg class="icon"><use href="#sg-camera"></use></svg></div>
                        <div><span>SECTION 04 // PROOF AUDIT</span><h2>Verification Media &amp; Knurl Hashes</h2></div>
                        <b class="sg-neutral-badge">TAMPER-PROOF</b>
                    </div>
                    <div class="sg-upload-grid">
                        <label class="sg-upload-card"><input type="file" accept="image/*"><span class="sg-upload-icon"><svg class="icon"><use href="#sg-camera"></use></svg></span><strong>Endcap &amp; Knurl Macro</strong><small>Close-up macro of barbell brand stamps &amp; diamond knurl teeth</small><b>JPG / PNG / RAW</b></label>
                        <label class="sg-upload-card"><input type="file" accept="image/*"><span class="sg-upload-icon"><svg class="icon"><use href="#sg-upload"></use></svg></span><strong>Calibrated Plate Tare</strong><small>Photo showing certified weight labels and calibration plugs</small><b>MIN 12 MEGAPIXELS</b></label>
                        <label class="sg-upload-card"><input type="file" accept="video/*"><span class="sg-upload-icon"><svg class="icon"><use href="#sg-bars"></use></svg></span><strong>Platform Walkthrough</strong><small>Oak Center Deck / 50mm Rubber Landing</small><b>MP4 / WEBM / 4K</b></label>
                    </div>
                    <label class="sg-field sg-proof-url">Video Walkthrough URL / Cloud Storage Hash<input type="url" value="https://ironpulse.internal/proof/austin-black-mountain-aud-94"></label>
                    <div class="sg-auditor-row"><div><svg class="icon"><use href="#sg-user"></use></svg><span><b>CREATED AUDITOR</b><strong>@GhostLifter_TX <i>✓</i></strong></span></div><div><span>PENDING KARMA ESCROW</span><strong>+250 POINTS</strong></div></div>
                </section>

                <p class="sg-sr-only" id="sg-preview-note">Preview only. Drafts, uploads, and submissions are not saved or sent.</p>
                <div class="sg-actions">
                    <span><svg class="icon"><use href="#sg-clock"></use></svg>Preview only — entries are not saved or sent.</span>
                    <button class="sg-save-button" type="button" aria-describedby="sg-preview-note">Save Draft</button>
                    <button class="sg-submit-button" type="button" aria-describedby="sg-preview-note"><svg class="icon"><use href="#sg-check"></use></svg>Submit Sanctuary for Peer Audit <small>(+250 Karma)</small></button>
                </div>
            </div>

            <aside class="sg-sidebar">
                <section class="sg-side-card sg-criteria">
                    <div class="sg-side-heading"><h2><svg class="icon"><use href="#sg-warning"></use></svg>Sanctuary Criteria</h2><b>ZERO FLUFF</b></div>
                    <p>IronPulse rejects commercial health clubs, boutique fitness studios, and facilities that restrict raw powerlifting or Olympic lifting.</p>
                    <ul>
                        <li><svg class="icon"><use href="#sg-check"></use></svg><span><b>Calibrated Steel or Deep Dish:</b> Must house minimum 1,500kg of certified competition plates.</span></li>
                        <li><svg class="icon"><use href="#sg-check"></use></svg><span><b>Chalk is Sacred:</b> Pure block chalk allowed without penalty or plastic container policing.</span></li>
                        <li><svg class="icon"><use href="#sg-check"></use></svg><span><b>Unrestricted Deadlift Drops:</b> No complaints regarding iron acoustics on drop decks.</span></li>
                        <li class="sg-criterion-warning"><svg class="icon"><use href="#sg-warning"></use></svg><span><b>Immediate Rejection:</b> Smith-machine-only facilities, Planet Fitness, or anti-grunt policies.</span></li>
                    </ul>
                </section>

                <section class="sg-side-card sg-dispatch-flow">
                    <h2><svg class="icon"><use href="#sg-bars"></use></svg>Audit Dispatch Flow</h2>
                    <p>How submitted strength hubs go from intake form to hardware-indexed sanctuary on the live network.</p>
                    <ol>
                        <li><span>01</span><div><b>Automated Telemetry Parse</b><small>Metadata check &amp; knurl image hash analysis completed in under 2 hours.</small></div></li>
                        <li><span>02</span><div><b>Tier-1 Local Auditor Dispatch</b><small>Verified local lifter validates stackability, plate accuracy, and atmosphere.</small></div></li>
                        <li><span>03</span><div><b>Live Manifest Index &amp; Bounty</b><small>Official verified badge awarded and a +250 Karma credited to your account.</small></div></li>
                    </ol>
                </section>

                <section class="sg-side-card sg-verified">
                    <h2><svg class="icon"><use href="#sg-shield"></use></svg>Recently Verified <i></i></h2>
                    <article><strong>Iron Haven Compound</strong><b>98.7% HARDWARE</b><small>Columbus, OH &bull; Verified by @B-Real</small><span>10 SQUAT RACKS <i></i> ELEIKO IPF CERT</span></article>
                    <article><strong>Black Iron Bastion</strong><b>98.5% HARDWARE</b><small>Seattle, WA &bull; Verified by @ThorIsHeavy</small><span>MONOLIFT SPEC <i></i> 24/7 KEYCARD</span></article>
                    <article><strong>Metropolitan Iron Club</strong><b>99.8% HARDWARE</b><small>Austin, TX &bull; Verified by @BigDan_83</small><span>18 PLATFORMS <i></i> CALIBRATED KG</span></article>
                </section>

                <section class="sg-side-card sg-rewards">
                    <span><svg class="icon"><use href="#sg-trophy"></use></svg>AUDITOR REWARDS</span>
                    <h2>Unlisted Sanctuary Bounty</h2>
                    <p>Submitting verified facilities accumulates Auditor Karma. Reach Tier-1 to unlock official spotter credentials, test calibrated bars before retail drops, and claim meet-day gear vouchers.</p>
                    <div><small>NEXT AUDITOR LEVEL</small><strong>Master Field Inspector <b>750 / 1000 PTS</b></strong></div>
                </section>
            </aside>
        </div>
    </div>
</main>

<?php
require __DIR__ . '/components/footer.html.php';
?>
<div class="sg-mobile-action-bar">
    <button class="sg-save-button" type="button" aria-describedby="sg-preview-note">▣ Draft</button>
    <button class="sg-submit-button" type="button" aria-describedby="sg-preview-note"><svg class="icon"><use href="#sg-check"></use></svg>Submit Sanctuary <small>+250</small></button>
</div>
<?php
require __DIR__ . '/components/mobile-nav.html.php';
?>
</body>
</html>
