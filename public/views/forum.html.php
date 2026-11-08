<?php

declare(strict_types=1);

$iconPrefix = 'forum';
$desktopHeaderComponent = [
    'class' => 'site-header forum-desktop-header',
    'navigationClass' => 'main-nav',
    'activePage' => 'forum',
    'singleLineNavigation' => false,
    'searchHref' => '#discussion-feed',
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
            ['href' => '/forum#discussion-meet-debrief', 'label' => 'Meet Preparation'],
            ['href' => '/forum#discussion-gear-review', 'label' => 'Barbell Calibration Logs'],
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
    <symbol id="forum-play" viewBox="0 0 24 24"><path d="m8 5 11 7-11 7z"/></symbol>
    <symbol id="forum-bars" viewBox="0 0 24 24"><path d="M3 9v6M6.5 7v10M17.5 7v10M21 9v6M6.5 12h11"/></symbol>
    <symbol id="forum-camera" viewBox="0 0 24 24"><path d="M4 7h3l2-3h6l2 3h3a2 2 0 0 1 2 2v10H2V9a2 2 0 0 1 2-2Z"/><circle cx="12" cy="13" r="3"/></symbol>
    <symbol id="forum-trophy" viewBox="0 0 24 24"><path d="M8 4h8v5a4 4 0 0 1-8 0V4ZM8 5H4v2a4 4 0 0 0 4 4m8-6h4v2a4 4 0 0 1-4 4m-4 2v5m-4 3h8m-7-3h6"/></symbol>
    <symbol id="forum-chart" viewBox="0 0 24 24"><path d="M4 19V5m0 14h17M8 15l4-4 3 2 5-6"/></symbol>
    <symbol id="forum-clock" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></symbol>
    <symbol id="forum-scale" viewBox="0 0 24 24"><path d="M12 3v18m-8-4h16M6 17l-3 4m15-4 3 4M5 9c0-2 3-4 7-4s7 2 7 4M4 9l-2 5h5L4 9Zm16 0-3 5h5l-2-5Z"/></symbol>
    <symbol id="forum-info" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 11v5m0-8h.01"/></symbol>
    <symbol id="forum-photo" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2"/><circle cx="8.5" cy="9" r="1.5"/><path d="m21 15-5-5L5 20"/></symbol>
    <symbol id="forum-calendar" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4m8-4v4"/></symbol>
    <symbol id="forum-send" viewBox="0 0 24 24"><path d="m22 2-7 20-4-9-9-4 20-7ZM22 2 11 13"/></symbol>
</svg>

<?php
require __DIR__ . '/components/desktop-header.html.php';
require __DIR__ . '/components/mobile-header.html.php';
?>

<main class="forum-main">
    <div class="forum-container">
        <section class="forum-intro">
            <div class="forum-mobile-status"><i></i>1,428 LIFTERS ACTIVE &bull; 99.8% VERIFIED</div>
            <div class="forum-intro-meta">
                <div class="forum-breadcrumb"><i></i><strong>FORUM // LOCKER ROOM</strong><span>&bull; REAL-TIME LIFTER TELEMETRY &amp; DISCUSSIONS</span></div>
                <div class="forum-live-stats"><span><i></i>1,428 LIFTERS ACTIVE</span><span><svg class="icon"><use href="#forum-chat"></use></svg>342 THREADS TODAY</span><span><svg class="icon"><use href="#forum-shield"></use></svg>99.8% VERIFIED REPUTATION</span></div>
            </div>
            <div class="forum-title-row">
                <div>
                    <span class="forum-mobile-room">LOCKER ROOM</span>
                    <h1>The locker room: lifter forum &amp; telemetry hub</h1>
                    <p>Unfiltered gym intelligence, meet debriefs, calibrated gear tear-downs, certified form checks, and underground powerlifting sanctuary reviews.</p>
                </div>
                <div class="forum-title-actions">
                    <div class="forum-search"><svg class="icon"><use href="#forum-search"></use></svg><span>Search Forum</span><kbd>⌘K</kbd></div>
                    <a class="forum-button" href="/forum/new"><svg class="icon"><use href="#forum-plus"></use></svg><span>Start Discussion</span></a>
                </div>
            </div>
        </section>

        <div class="forum-mobile-tools">
            <div class="forum-mobile-search"><svg class="icon"><use href="#forum-search"></use></svg><span>Search gear specs, meet cuts, form checks...</span></div>
            <a href="/forum/new"><svg class="icon"><use href="#forum-plus"></use></svg>Thread</a>
        </div>

        <nav class="forum-categories" aria-label="Discussion categories">
            <a class="is-active" href="#discussion-feed"><svg class="icon"><use href="#forum-chat"></use></svg>All Discussions <b>342</b></a>
            <a href="#discussion-feed"><svg class="icon"><use href="#forum-trophy"></use></svg>Meet Prep &amp; Debriefs <small>USAPL / IPF</small></a>
            <a href="#discussion-feed"><svg class="icon"><use href="#forum-bars"></use></svg>Gear Tear-Downs <small>KNURL LAB</small></a>
            <a href="#discussion-feed"><svg class="icon"><use href="#forum-camera"></use></svg>Form Check &amp; Analysis <i></i></a>
            <a href="#discussion-feed"><svg class="icon"><use href="#forum-pin"></use></svg>Sanctuary &amp; Gym Intel</a>
            <a href="#discussion-feed"><svg class="icon"><use href="#forum-chart"></use></svg>Programming &amp; RPE</a>
            <a href="#discussion-feed"><svg class="icon"><use href="#forum-calendar"></use></svg>Meet Calendar</a>
        </nav>

        <nav class="forum-mobile-sort" aria-label="Sort discussions">
            <a class="is-active" href="#mobile-discussion-feed">TRENDING <span>🔥</span></a>
            <a href="#mobile-discussion-feed">NEWEST</a>
            <a href="#mobile-discussion-feed">TOP VOTED</a>
            <a href="#mobile-discussion-feed">REVIEW QUEUE</a>
        </nav>

        <div class="forum-layout">
            <section class="forum-feed" id="discussion-feed" aria-label="Recent discussions">
                <div class="forum-toolbar">
                    <nav class="forum-sort" aria-label="Sort discussions">
                        <a class="is-active" href="#discussion-feed"><svg class="icon"><use href="#forum-up"></use></svg><span>Trending<br>Hot</span></a>
                        <a href="#discussion-feed"><svg class="icon"><use href="#forum-clock"></use></svg><span>Newest<br>Drops</span></a>
                        <a href="#discussion-feed"><svg class="icon"><use href="#forum-chart"></use></svg><span>Top<br>Voted</span></a>
                        <a href="#discussion-feed"><svg class="icon"><use href="#forum-shield"></use></svg><span>Needs Form<br>Review</span><b>14</b></a>
                    </nav>
                    <div class="forum-tag-filters"><strong>FILTER TAGS:</strong><a href="#discussion-feed">#Squat</a><a href="#discussion-feed">#Eleiko</a><a href="#discussion-feed">#Austin</a></div>
                </div>

                <div class="forum-thread-list">
                    <article class="forum-thread forum-thread-featured" id="discussion-form-check">
                        <div class="forum-vote" aria-label="428 votes"><svg class="icon"><use href="#forum-up"></use></svg><strong>428</strong><svg class="icon vote-down"><use href="#forum-up"></use></svg></div>
                        <div class="forum-thread-main">
                            <div class="forum-thread-heading">
                                <span class="forum-avatar avatar-lime">AL</span>
                                <div class="forum-author"><div><strong>@Alex_Lith</strong><span class="forum-tag tag-green">USAPL 93KG COMPETITOR</span></div><small>Squat Check &bull; 14m ago</small></div>
                                <span class="forum-post-category tag-green">FORM ANALYSIS</span>
                                <a class="forum-bookmark" href="#discussion-form-check" aria-label="Save discussion"><svg class="icon"><use href="#forum-bookmark"></use></svg></a>
                            </div>
                            <h2><a href="/forum/1">Squat RPE 9.5 lockout hitch: knee valgus or quad fatigue off the pins?</a></h2>
                            <div class="forum-video" style="background-image:url('/assets/img/form-check.jpg')">
                                <span class="forum-video-label"><svg class="icon"><use href="#forum-chart"></use></svg>BAR VELOCITY 0.28 m/s</span>
                                <span class="forum-video-play"><svg class="icon"><use href="#forum-play"></use></svg></span>
                                <span class="forum-video-time">0:42</span>
                                <span class="forum-video-caption">Kinematic track: 3rd attempt simulation <b>4K 60FPS</b></span>
                            </div>
                            <p class="forum-excerpt">Noticed a slight 3.8cm lateral drift towards the left heel at parallel reversal during 3rd working set. Angle shows bar leveling issue at initial dip. Looking for a second set of eyes on the sticking point.</p>
                            <div class="forum-thread-footer">
                                <span><svg class="icon"><use href="#forum-chat"></use></svg><b>112</b> Replies</span>
                                <span><svg class="icon"><use href="#forum-eye"></use></svg>4.1k Views</span>
                                <span class="forum-velocity"><svg class="icon"><use href="#forum-chart"></use></svg>Bar Velocity 0.28 m/s</span>
                                <span class="forum-thread-tags"><i>#Squat</i><i>#FormCheck</i><i>#LowBar</i><i>#IPF</i></span>
                                <span class="forum-mobile-actions"><b><svg class="icon"><use href="#forum-up"></use></svg>428</b><b><svg class="icon"><use href="#forum-chat"></use></svg>112</b><strong>NEEDS 2 COACH VOTES</strong></span>
                            </div>
                        </div>
                    </article>

                    <article class="forum-thread" id="discussion-gear-review">
                        <div class="forum-vote" aria-label="619 votes"><svg class="icon"><use href="#forum-up"></use></svg><strong>619</strong><svg class="icon vote-down"><use href="#forum-up"></use></svg></div>
                        <div class="forum-thread-main">
                            <div class="forum-thread-heading">
                                <span class="forum-avatar avatar-blue">KL</span>
                                <div class="forum-author"><div><strong>@MarcusKnurling</strong><span class="forum-tag tag-blue"><svg class="icon"><use href="#forum-shield"></use></svg>AUDITOR</span></div><small>Knurl Lab &bull; 2h ago</small></div>
                                <span class="forum-post-category tag-blue">GEAR DIAGNOSTICS &amp; LAB</span>
                                <span class="forum-award">8 AWARDS</span>
                                <a class="forum-bookmark" href="#discussion-gear-review" aria-label="Save discussion"><svg class="icon"><use href="#forum-bookmark"></use></svg></a>
                            </div>
                            <h2><a href="/forum/2">[Deep Dive] Eleiko IPF Comp vs Rogue Ohio Power Bar: 2-Year Knurl Wear &amp; Peak Hill Decay</a></h2>
                            <div class="forum-gear-comparison">
                                <div class="knurl-photo" style="background-image:url('/assets/img/black-iron.jpg')"><span>MICROMETER: 1.2mm PYRAMID</span></div>
                                <div class="grip-score"><span>GRIP RET.</span><strong>92.4%</strong><small><svg class="icon"><use href="#forum-bars"></use></svg> RAW STEEL</small></div>
                            </div>
                            <p class="forum-excerpt">We put optical micrometer measurements to both bars after 700+ heavy squat and deadlift sessions. The Eleiko volcano knurl retained 88.4% of original tooth depth, while the Rogue aggressive diamond knurl smoothed at center ring contact points.</p>
                            <div class="forum-lab-report"><svg class="icon"><use href="#forum-scale"></use></svg><span><small>MICRON RESOLUTION COMPARISON</small><br>Eleiko 1.2mm Tooth Height / Rogue 1.1mm Tooth Height</span><b>FULL CAD DATA ATTACHED</b></div>
                            <div class="forum-thread-footer">
                                <span><svg class="icon"><use href="#forum-chat"></use></svg><b>84</b> Replies</span><span><svg class="icon"><use href="#forum-eye"></use></svg>5.2k Views</span>
                                <span class="forum-thread-tags"><i>#GearReview</i><i>#Barbell</i><i>#KnurlDiagnostic</i><i>#Eleiko</i></span>
                            </div>
                        </div>
                    </article>

                    <article class="forum-thread" id="discussion-gym-psa">
                        <div class="forum-vote" aria-label="315 votes"><svg class="icon"><use href="#forum-up"></use></svg><strong>315</strong><svg class="icon vote-down"><use href="#forum-up"></use></svg></div>
                        <div class="forum-thread-main">
                            <div class="forum-thread-heading">
                                <span class="forum-avatar avatar-orange">JD</span>
                                <div class="forum-author"><div><strong>@J_Donnelly</strong><span class="forum-post-category tag-orange">SANCTUARY PSA &amp; INTEL</span></div><small>METRO IRON REGULAR &bull; 8h ago</small></div>
                                <span class="forum-location">AUSTIN, TX</span>
                                <a class="forum-bookmark" href="#discussion-gym-psa" aria-label="Save discussion"><svg class="icon"><use href="#forum-bookmark"></use></svg></a>
                            </div>
                            <h2><a href="/forum/3">[Gym PSA] How Metropolitan Iron handles peak 5 PM rack availability &mdash; New 20-min warmup floor rule &amp; queue etiquette</a></h2>
                            <p class="forum-excerpt">Management just instituted the deadlift bullpen queue chalk board. If you plan on camping rack #4 for heavy doubles past 5:30 PM, sign in early. Platform etiquette details and chalk usage protocols inside.</p>
                            <div class="forum-thread-tags"><i>#Austin</i><i>#MetropolitanIron</i><i>#GymEtiquette</i><i>#RackTelemetry</i></div>
                            <div class="forum-thread-footer"><span><svg class="icon"><use href="#forum-chat"></use></svg><b>96</b> Replies</span><span><svg class="icon"><use href="#forum-eye"></use></svg>3.8k Views</span></div>
                        </div>
                    </article>

                    <article class="forum-thread" id="discussion-meet-debrief">
                        <div class="forum-vote" aria-label="284 votes"><svg class="icon"><use href="#forum-up"></use></svg><strong>284</strong><svg class="icon vote-down"><use href="#forum-up"></use></svg></div>
                        <div class="forum-thread-main">
                            <div class="forum-thread-heading">
                                <span class="forum-avatar avatar-orange">EK</span>
                                <div class="forum-author"><div><strong>@Elena_K</strong><span class="forum-tag tag-orange">MASTER SPOTTER &bull; 840 REP</span></div><small>Meet Prep &bull; 14h ago</small></div>
                                <span class="forum-post-category tag-orange">MEET DEBRIEF</span>
                                <span class="forum-sanctioned">WRPF SANCTIONED</span>
                                <a class="forum-bookmark" href="#discussion-meet-debrief" aria-label="Save discussion"><svg class="icon"><use href="#forum-bookmark"></use></svg></a>
                            </div>
                            <h2><a href="/forum/4">[Meet Debrief] Cutting to 82.5kg for WRPF Nationals: Water cut protocol, 3rd attempt selections</a></h2>
                            <div class="meet-stats"><div><span>CUT TARGET</span><strong>-4.2 kg</strong></div><div><span>REFEED TIME</span><strong class="text-blue">14 hrs</strong></div><div><span>TOTAL</span><strong class="text-lime">542.5 kg</strong></div></div>
                            <p class="forum-excerpt">Comprehensive breakdown: Sodium loading starting 6 days out, water taper from 8L down to 500ml, rehydration electrolyte osmolarity ratios, and why jumping 12.5kg instead of 7.5kg on final bench cost the podium spot.</p>
                            <div class="forum-thread-footer"><span><svg class="icon"><use href="#forum-chat"></use></svg><b>63</b> Replies</span><span><svg class="icon"><use href="#forum-eye"></use></svg>2.9k Views</span><span class="forum-thread-tags"><i>#MeetPrep</i><i>#WRPF</i><i>#WeightCut</i><i>#AttemptStrategy</i></span></div>
                        </div>
                    </article>

                    <article class="forum-thread forum-thread-optional">
                        <div class="forum-vote" aria-label="197 votes"><svg class="icon"><use href="#forum-up"></use></svg><strong>197</strong><svg class="icon vote-down"><use href="#forum-up"></use></svg></div>
                        <div class="forum-thread-main">
                            <div class="forum-thread-heading"><span class="forum-avatar avatar-blue">RW</span><div class="forum-author"><div><strong>@RoadWarrior_PR</strong><span class="forum-post-category tag-blue">CITY GUIDE &amp; SOURCING</span></div><small>TRAVEL LIFTER &bull; 1d ago</small></div><a class="forum-bookmark" href="#discussion-feed" aria-label="Save discussion"><svg class="icon"><use href="#forum-bookmark"></use></svg></a></div>
                            <h2>[City Guide] Hidden 24/7 keycard powerlifting bunkers in Dallas &amp; Fort Worth with calibrated steel &amp; monolifts</h2>
                            <p class="forum-excerpt">Tired of hotel DB racks? Compiled four private key-fob strength warehouses with Ivanko / Eleiko calibrated plates, Texas power bars, and drop-in guest policies for traveling powerlifters.</p>
                            <div class="forum-thread-footer"><span><svg class="icon"><use href="#forum-chat"></use></svg><b>48</b> Replies</span><span><svg class="icon"><use href="#forum-eye"></use></svg>2.1k Views</span><span class="forum-thread-tags"><i>#CityGuide</i><i>#KeycardGyms</i><i>#DallasPowerlifting</i></span></div>
                        </div>
                    </article>

                    <article class="forum-thread forum-thread-optional">
                        <div class="forum-vote" aria-label="152 votes"><svg class="icon"><use href="#forum-up"></use></svg><strong>152</strong><svg class="icon vote-down"><use href="#forum-up"></use></svg></div>
                        <div class="forum-thread-main">
                            <div class="forum-thread-heading"><span class="forum-avatar avatar-blue">HV</span><div class="forum-author"><div><strong>@HeavyDan_PR</strong><span class="forum-post-category tag-blue">PROGRAM ANALYST</span></div><small>PROGRAMMING &amp; RECOVERY &bull; 1d ago</small></div><a class="forum-bookmark" href="#discussion-feed" aria-label="Save discussion"><svg class="icon"><use href="#forum-bookmark"></use></svg></a></div>
                            <h2>Sheiko Gold vs. Calgary Barbell 16-Week: Bench volume fatigue &amp; pecs recovery comparison</h2>
                            <p class="forum-excerpt">Tallying joint soreness indexes and bar deceleration over two consecutive 16-week cycles. Sheiko undulating intra-session benching showed significantly lower shoulder impingement risk despite higher tonnage.</p>
                            <div class="forum-thread-footer"><span><svg class="icon"><use href="#forum-chat"></use></svg><b>54</b> Replies</span><span><svg class="icon"><use href="#forum-eye"></use></svg>1.8k Views</span><span class="forum-thread-tags"><i>#Programming</i><i>#Sheiko</i><i>#BenchPress</i></span></div>
                        </div>
                    </article>
                </div>

                <div class="forum-feed-end"><span><i></i>DISPLAYING 6 OF 342 DISCUSSIONS</span><a href="#discussion-feed">Load next 25 threads <span>⌄</span></a></div>
            </section>

            <aside class="forum-sidebar" aria-label="Community tools">
                <section class="forum-side-card quick-launcher" id="quick-launcher">
                    <div class="forum-side-heading"><h2>QUICK LAUNCHER</h2><span>TELEMETRY SYNCED</span></div>
                    <div class="launcher-compose">Ask for form analysis, report rack crowding, or debate gear specs...</div>
                    <div class="launcher-actions"><span><svg class="icon"><use href="#forum-camera"></use></svg></span><span><svg class="icon"><use href="#forum-photo"></use></svg></span><span><svg class="icon"><use href="#forum-pin"></use></svg></span><span><svg class="icon"><use href="#forum-chart"></use></svg></span><a href="/forum/new">Post Thread</a></div>
                </section>

                <section class="forum-side-card spotters-card">
                    <div class="forum-side-heading"><h2><svg class="icon"><use href="#forum-trophy"></use></svg>Top Spotters (Karma)</h2><span>THIS WEEK</span></div>
                    <ol class="spotter-list">
                        <li><b>1</b><span><strong>@Elena_K</strong><small>FORM VERIFIER &bull; ATX</small></span><strong>840 REP</strong></li>
                        <li><b>2</b><span><strong>@Marcus_K</strong><small>IPF NATIONAL REF</small></span><strong>610 REP</strong></li>
                        <li><b>3</b><span><strong>@DaveLiftz</strong><small>KNURL LAB AUDITOR</small></span><strong>512 REP</strong></li>
                        <li><b>4</b><span><strong>@TaraRacks</strong><small>COACH &bull; SEATTLE</small></span><strong>420 REP</strong></li>
                    </ol>
                    <a class="forum-side-link" href="/leaderboard#spotter-karma">VIEW GLOBAL KARMA BOARD <svg class="icon"><use href="#forum-send"></use></svg></a>
                </section>

                <section class="forum-side-card poll-card">
                    <div class="forum-side-heading"><h2><svg class="icon"><use href="#forum-chart"></use></svg>Live Micro-Poll</h2><span class="poll-votes">1,180 VOTES</span></div>
                    <p>Most Durable Aggressive Deadlift Bar for Heavy Pulls?</p>
                    <div class="poll-option"><div><strong>Texas Deadlift Bar (Buddy Capps)</strong><b>54%</b></div><span><i style="width:54%"></i></span></div>
                    <div class="poll-option"><div><strong>Kabuki PR Deadlift Bar</strong><b>31%</b></div><span><i class="poll-blue" style="width:31%"></i></span></div>
                    <div class="poll-option"><div><strong>Rogue Ohio Deadlift Bar (Cerakote)</strong><b>15%</b></div><span><i class="poll-gray" style="width:15%"></i></span></div>
                    <small class="poll-deadline">POLL CLOSES IN 18 HOURS</small>
                </section>

                <section class="forum-side-card meet-card">
                    <div class="forum-side-heading"><h2><svg class="icon"><use href="#forum-calendar"></use></svg>Sanctioned Meet Roll-Call</h2><svg class="icon side-info"><use href="#forum-info"></use></svg></div>
                    <article><span>USAPL TX</span><time>MAR 28, 2025</time><h3>USAPL Texas State Championship</h3><div><span>San Antonio, TX</span><strong>14 LIFTERS GOING</strong></div></article>
                    <article><span>WRPF PRO</span><time>APR 12, 2025</time><h3>WRPF American Pro Qualifier</h3><div><span>Columbus, OH</span><strong>8 LIFTERS GOING</strong></div></article>
                    <a class="meet-attend" href="/#submit">⊕ &nbsp; Declare Meet Attendance</a>
                </section>

                <section class="forum-side-card rules-card">
                    <h2><svg class="icon"><use href="#forum-scale"></use></svg>The Lifter Code &amp; Rules</h2>
                    <ol><li><b>01.</b><span><strong>No Commercial Whining:</strong> Focus on barbell technique, facility solutions, and constructive telemetry.</span></li><li><b>02.</b><span><strong>Hardware Proof Required:</strong> Post raw knurl macro photos or calibrated readings for gear disputes.</span></li><li><b>03.</b><span><strong>Form Check Standard:</strong> Video angle MUST clearly show hip crease depth and lockout completion.</span></li></ol>
                </section>
            </aside>
        </div>

        <section class="forum-mobile-posts" id="mobile-discussion-feed" aria-label="Trending discussion threads">
            <article class="mobile-thread mobile-thread-form">
                <div class="mobile-thread-top"><span class="forum-avatar avatar-lime">AL</span><div class="forum-author"><div><strong>@Alex_Lith</strong><span class="forum-tag tag-green">USAPL 93kg</span></div><small>Squat Check &bull; 14m ago</small></div><a class="forum-bookmark" href="#discussion-form-check" aria-label="Save discussion"><svg class="icon"><use href="#forum-bookmark"></use></svg></a></div>
                <h2>Squat RPE 9.5 lockout hitch: knee valgus or quad fatigue off the pins?</h2>
                <div class="mobile-video" style="background-image:url('/assets/img/form-check.jpg')"><span class="mobile-video-label"><svg class="icon"><use href="#forum-chart"></use></svg>BAR VELOCITY 0.28 m/s</span><span class="forum-video-play"><svg class="icon"><use href="#forum-play"></use></svg></span><span class="forum-video-time">0:42</span><strong>KINEMATIC TRACK: 3RD ATTEMPT SIMULATION <i>4K 60FPS</i></strong></div>
                <div class="mobile-thread-footer"><span><svg class="icon"><use href="#forum-up"></use></svg>428</span><span><svg class="icon"><use href="#forum-chat"></use></svg>112</span><b>NEEDS 2 COACH VOTES</b></div>
            </article>

            <article class="mobile-thread">
                <div class="mobile-thread-top"><span class="forum-avatar avatar-blue">KL</span><div class="forum-author"><div><strong>@MarcusKnurling</strong><span class="forum-tag tag-blue"><svg class="icon"><use href="#forum-shield"></use></svg>AUDITOR</span></div><small>Knurl Lab &bull; 2h ago</small></div><a class="forum-bookmark" href="#discussion-gear-review" aria-label="Save discussion"><svg class="icon"><use href="#forum-bookmark"></use></svg></a></div>
                <h2>[Deep Dive] Eleiko IPF Comp vs Rogue Ohio Power Bar: 2-Year Knurl Wear &amp; Peak Hill Decay</h2>
                <div class="mobile-knurl-comparison"><div class="knurl-photo" style="background-image:url('/assets/img/black-iron.jpg')"><span>MICROMETER: 1.2mm PYRAMID</span></div><div class="grip-score"><span>GRIP RET.</span><strong>92.4%</strong><small><svg class="icon"><use href="#forum-bars"></use></svg> Raw Steel</small></div></div>
                <p>After 730 training cycles across 4 lifters, laser profile telemetry reveals Rogue Aggressive volcanic knurl degrades 18% slower than raw Swedish...</p>
                <div class="mobile-thread-footer"><span><svg class="icon"><use href="#forum-up"></use></svg>619</span><span><svg class="icon"><use href="#forum-chat"></use></svg>84</span><b class="mobile-report-link"><svg class="icon"><use href="#forum-scale"></use></svg>LAB REPORT</b></div>
            </article>

            <article class="mobile-thread">
                <div class="mobile-thread-top"><span class="forum-avatar avatar-orange">EK</span><div class="forum-author"><div><strong>@Elena_K</strong><span class="forum-tag tag-orange">MASTER SPOTTER</span></div><small>Meet Prep &bull; 5h ago</small></div><a class="forum-bookmark" href="#discussion-meet-debrief" aria-label="Save discussion"><svg class="icon"><use href="#forum-bookmark"></use></svg></a></div>
                <h2>[Meet Debrief] Cutting to 82.5kg for WRPF Nationals: Water cut protocol &amp; 3rd attempt selections</h2>
                <div class="mobile-meet-stats"><div><span>CUT TARGET</span><strong>-4.2 kg</strong></div><div><span>REFEED TIME</span><strong class="text-blue">14 hrs</strong></div><div><span>TOTAL</span><strong class="text-lime">542.5 kg</strong></div></div>
                <p>Sodium ramp from Sunday to Wednesday, 8L distilled water protocol, followed by rapid 2hr hyper-osmotic electrolytes replenishment once...</p>
                <div class="mobile-thread-footer"><span><svg class="icon"><use href="#forum-up"></use></svg>384</span><span><svg class="icon"><use href="#forum-chat"></use></svg>59</span><b class="meet-trophy"><svg class="icon"><use href="#forum-trophy"></use></svg>NATIONALS 2024</b></div>
            </article>

            <article class="mobile-thread">
                <div class="mobile-thread-top"><span class="forum-avatar avatar-blue">MI</span><div class="forum-author"><div><strong>@MetroIronStaff</strong><span class="forum-tag tag-green">HQ VERIFIED</span></div><small>Gym Intel &bull; 8h ago</small></div><a class="forum-bookmark" href="#discussion-gym-psa" aria-label="Save discussion"><svg class="icon"><use href="#forum-bookmark"></use></svg></a></div>
                <h2>[Gym PSA] How Metropolitan Iron handles peak 5 PM rack availability: Board rotation rules update</h2>
                <div class="mobile-policy"><span></span>12 Combo Racks: 20-min max squat rotation<b>POLICY</b></div>
                <div class="mobile-thread-footer"><span><svg class="icon"><use href="#forum-up"></use></svg>192</span><span><svg class="icon"><use href="#forum-chat"></use></svg>41</span><b class="mobile-location"><svg class="icon"><use href="#forum-pin"></use></svg>EAST DOCK, AUSTIN</b></div>
            </article>
        </section>
    </div>
</main>

<?php
require __DIR__ . '/components/footer.html.php';
?>
<a class="forum-mobile-compose" href="/forum/new" aria-label="Start a discussion"><svg class="icon"><use href="#forum-plus"></use></svg><span>Post</span></a>
<?php
require __DIR__ . '/components/mobile-nav.html.php';
?>
