<?php

declare(strict_types=1);

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
$post = [
    'author' => 'Alex_Lith',
    'initials' => 'AL',
    'credential' => 'USAPL 93KG COMPETITOR',
    'category' => 'FORM ANALYSIS',
    'title' => 'Squat RPE 9.5 lockout hitch: knee valgus or quad fatigue off the pins?',
    'posted' => '14 MIN AGO',
    'location' => 'Platform 04 &bull; Austin, TX',
    'votes' => '428',
    'replies' => '112',
    'views' => '4.1K',
    'image' => '/assets/img/form-check.jpg',
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
    <symbol id="forum-trophy" viewBox="0 0 24 24"><path d="M8 4h8v5a4 4 0 0 1-8 0V4ZM8 5H4v2a4 4 0 0 0 4 4m8-6h4v2a4 4 0 0 1-4 4m-4 2v5m-4 3h8m-7-3h6"/></symbol>
    <symbol id="forum-chart" viewBox="0 0 24 24"><path d="M4 19V5m0 14h17M8 15l4-4 3 2 5-6"/></symbol>
    <symbol id="forum-clock" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></symbol>
    <symbol id="forum-photo" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2"/><circle cx="8.5" cy="9" r="1.5"/><path d="m21 15-5-5L5 20"/></symbol>
    <symbol id="forum-send" viewBox="0 0 24 24"><path d="m22 2-7 20-4-9-9-4 20-7ZM22 2 11 13"/></symbol>
    <symbol id="forum-copy" viewBox="0 0 24 24"><rect x="8" y="8" width="13" height="13" rx="2"/><path d="M16 8V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3"/></symbol>
    <symbol id="forum-share" viewBox="0 0 24 24"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="m8.7 10.7 6.6-4.4m-6.6 7 6.6 4.4"/></symbol>
    <symbol id="forum-flag" viewBox="0 0 24 24"><path d="M5 21V5m0 0c5-4 9 4 14 0v11c-5 4-9-4-14 0"/></symbol>
    <symbol id="forum-check" viewBox="0 0 24 24"><path d="m5 12 4 4L19 6"/></symbol>
</svg>

<?php
require __DIR__ . '/components/desktop-header.html.php';
require __DIR__ . '/components/mobile-header.html.php';
?>

<main class="ft-main">
    <div class="forum-container">
        <nav class="ft-breadcrumb" aria-label="Breadcrumb">
            <a href="/forum">FORUM // THE LOCKER ROOM</a><span>/</span><strong>DISCUSSION #<?= (int) $postId ?></strong>
        </nav>
        <div class="ft-layout">
            <article class="ft-article">
                <header class="ft-post-header">
                    <div class="ft-post-meta">
                        <a class="ft-back" href="/forum" aria-label="Back to forum"><svg class="icon"><path d="m15 18-6-6 6-6"/></svg></a>
                        <span class="forum-avatar avatar-lime"><?= htmlspecialchars($post['initials'], ENT_QUOTES, 'UTF-8') ?></span>
                        <div class="forum-author">
                            <div><strong>@<?= htmlspecialchars($post['author'], ENT_QUOTES, 'UTF-8') ?></strong><span class="forum-tag tag-green"><?= htmlspecialchars($post['credential'], ENT_QUOTES, 'UTF-8') ?></span></div>
                            <small><?= htmlspecialchars($post['posted'], ENT_QUOTES, 'UTF-8') ?> <span>&bull;</span> <svg class="icon"><use href="#forum-pin"></use></svg> <?= $post['location'] ?></small>
                        </div>
                        <span class="forum-post-category tag-green"><?= htmlspecialchars($post['category'], ENT_QUOTES, 'UTF-8') ?></span>
                        <button class="ft-bookmark" type="button" aria-label="Save post" aria-pressed="false" data-bookmark><svg class="icon"><use href="#forum-bookmark"></use></svg></button>
                        <button class="ft-more" type="button" aria-label="More post options" title="More options"><span></span><span></span><span></span></button>
                    </div>
                    <h1><?= htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8') ?></h1>
                    <div class="ft-stats">
                        <span><svg class="icon"><use href="#forum-eye"></use></svg> <?= htmlspecialchars($post['views'], ENT_QUOTES, 'UTF-8') ?> VIEWS</span>
                        <span><svg class="icon"><use href="#forum-clock"></use></svg> UPDATED <?= htmlspecialchars($post['posted'], ENT_QUOTES, 'UTF-8') ?></span>
                        <span class="ft-id">POST #<?= (int) $postId ?></span>
                    </div>
                </header>

                <figure class="ft-video" style="background-image:url('<?= htmlspecialchars($post['image'], ENT_QUOTES, 'UTF-8') ?>')">
                    <span class="ft-video-label"><svg class="icon"><use href="#forum-chart"></use></svg> BAR VELOCITY 0.28 m/s</span>
                    <button class="ft-play" type="button" aria-label="Play form check preview" aria-pressed="false" data-video-preview><svg class="icon"><use href="#forum-play"></use></svg></button>
                    <span class="ft-video-time">0:42</span>
                    <figcaption>KINEMATIC TRACK: 3RD ATTEMPT SIMULATION <b>4K 60FPS</b></figcaption>
                </figure>

                <div class="ft-post-copy">
                    <p>Looking for a second set of eyes on this third attempt. I noticed a slight <strong>3.8 cm lateral drift toward the left heel</strong> at the parallel reversal. From the front angle the bar also seems to level out right as I start the drive.</p>
                    <p>Does that look like knee valgus, or am I just running out of quad strength out of the hole at this RPE? The video is from the final top set after back-off volume, so fatigue is probably part of it.</p>
                    <div class="ft-telemetry">
                        <div class="ft-telemetry-heading"><span><svg class="icon"><use href="#forum-chart"></use></svg> SESSION TELEMETRY</span><b><i></i> VERIFIED SENSOR</b></div>
                        <div class="ft-metrics">
                            <div><span>BAR VELOCITY</span><strong>0.28 <small>m/s</small></strong></div>
                            <div><span>LOAD</span><strong>205.0 <small>kg</small></strong></div>
                            <div><span>EFFORT</span><strong>RPE 9.5</strong></div>
                            <div><span>ATTEMPT</span><strong>3RD SET</strong></div>
                        </div>
                        <svg class="ft-chart" viewBox="0 0 760 104" role="img" aria-label="Bar velocity trace for the squat attempt">
                            <path class="ft-chart-grid" d="M0 20H760M0 48H760M0 76H760"/>
                            <path class="ft-chart-area" d="M4 78 C60 75 82 66 125 64 S196 70 238 59 S300 45 342 52 S402 76 441 69 S496 31 537 28 S590 47 622 38 S680 21 756 25V98H4Z"/>
                            <path class="ft-chart-line" d="M4 78 C60 75 82 66 125 64 S196 70 238 59 S300 45 342 52 S402 76 441 69 S496 31 537 28 S590 47 622 38 S680 21 756 25"/>
                            <circle cx="537" cy="28" r="4"/>
                        </svg>
                        <div class="ft-chart-scale"><span>ECCENTRIC</span><span>REVERSAL</span><span>CONCENTRIC</span><span>LOCKOUT</span></div>
                    </div>
                    <p>Setup notes: low-bar position, comp shoes, beltless warm-ups and belt on for the final three working sets. Camera was set at hip height, roughly 45 degrees from the front.</p>
                    <div class="ft-tags"><a href="/forum">#Squat</a><a href="/forum">#FormCheck</a><a href="/forum">#LowBar</a><a href="/forum">#IPF</a></div>
                </div>

                <div class="ft-post-actions">
                    <button type="button" class="ft-vote" aria-pressed="false" data-vote><svg class="icon"><use href="#forum-up"></use></svg><span data-vote-count><?= htmlspecialchars($post['votes'], ENT_QUOTES, 'UTF-8') ?></span></button>
                    <a href="#ft-replies"><svg class="icon"><use href="#forum-chat"></use></svg><?= htmlspecialchars($post['replies'], ENT_QUOTES, 'UTF-8') ?> REPLIES</a>
                    <button type="button" data-copy-link><svg class="icon"><use href="#forum-copy"></use></svg> COPY LINK</button>
                    <button type="button" class="ft-share" data-share><svg class="icon"><use href="#forum-share"></use></svg> SHARE</button>
                    <button type="button" class="ft-report" data-report><svg class="icon"><use href="#forum-flag"></use></svg> REPORT</button>
                </div>
                <p class="ft-action-notice" role="status" aria-live="polite" data-action-notice hidden></p>

                <section class="ft-replies" id="ft-replies">
                    <div class="ft-replies-heading"><h2>Locker Room Replies <span>112</span></h2><button type="button">TOP SPOTTERS <svg class="icon"><path d="m6 9 6 6 6-6"/></svg></button></div>
                    <form class="ft-reply-form" data-reply-form>
                        <span class="forum-avatar avatar-blue">MV</span>
                        <label class="ft-visually-hidden" for="ft-reply">Add a reply</label>
                        <textarea id="ft-reply" rows="2" placeholder="Add a technical, constructive reply..." data-reply-input></textarea>
                        <button type="submit" aria-label="Submit reply"><svg class="icon"><use href="#forum-send"></use></svg></button>
                    </form>
                    <p class="ft-reply-notice" role="status" aria-live="polite" data-reply-notice hidden></p>
                    <div class="ft-comment-list" data-comment-list>
                        <article class="ft-comment">
                            <span class="forum-avatar avatar-blue">DK</span>
                            <div class="ft-comment-body">
                                <div class="ft-comment-heading"><strong>@DaveKnurl</strong><span>IPF COACH</span><time>8 MIN AGO</time></div>
                                <p>From the front angle the bar path shifts before the knees cave. Try cueing pressure through the whole foot and bracing into the left lat before the descent. Your depth looks solid.</p>
                                <div class="ft-comment-actions"><button type="button" data-comment-like><svg class="icon"><use href="#forum-up"></use></svg> <span>24</span></button><button type="button" data-reply-to>REPLY</button></div>
                            </div>
                        </article>
                        <article class="ft-comment">
                            <span class="forum-avatar avatar-orange">EK</span>
                            <div class="ft-comment-body">
                                <div class="ft-comment-heading"><strong>@Elena_K</strong><span class="ft-coach-badge"><svg class="icon"><use href="#forum-shield"></use></svg> VERIFIED SPOTTER</span><time>5 MIN AGO</time></div>
                                <p>Agree with Dave. The right knee tracks well; watch the left foot pressure as you hit depth. The 0.28 m/s bar speed suggests you had enough drive to finish that rep.</p>
                                <div class="ft-comment-actions"><button type="button" data-comment-like><svg class="icon"><use href="#forum-up"></use></svg> <span>18</span></button><button type="button" data-reply-to>REPLY</button></div>
                            </div>
                        </article>
                    </div>
                    <button class="ft-load-replies" type="button" data-load-replies>LOAD MORE REPLIES <svg class="icon"><path d="m6 9 6 6 6-6"/></svg></button>
                </section>
            </article>

            <aside class="ft-sidebar">
                <section class="ft-side-card ft-author-card">
                    <div class="ft-side-heading"><h2>POST AUTHOR</h2><span><i></i> VERIFIED</span></div>
                    <div class="ft-author">
                        <span class="ft-author-avatar">AL</span>
                        <span><strong>@Alex_Lith</strong><small>USAPL 93kg &bull; Austin, TX</small></span>
                        <button type="button" data-follow>FOLLOW</button>
                    </div>
                    <p>Competitive powerlifter tracking technique and bar speed through the qualifying season.</p>
                    <div class="ft-author-stats"><span><b>34</b> POSTS</span><span><b>812</b> SPOTTER KARMA</span><span><b>98%</b> TRUST</span></div>
                </section>
                <section class="ft-side-card ft-session-card">
                    <div class="ft-side-heading"><h2><svg class="icon"><use href="#forum-chart"></use></svg> SESSION DETAILS</h2><span>LIVE DATA</span></div>
                    <dl><div><dt>FACILITY</dt><dd>Black Iron Compound #04</dd></div><div><dt>LIFT</dt><dd>Competition Back Squat</dd></div><div><dt>BAR</dt><dd>29 mm Power Bar</dd></div><div><dt>PLATES</dt><dd>Calibrated &bull; &plusmn;10 g</dd></div></dl>
                </section>
                <section class="ft-side-card ft-review-card">
                    <div class="ft-side-heading"><h2><svg class="icon"><use href="#forum-shield"></use></svg> FORM CHECK STATUS</h2></div>
                    <div class="ft-review-progress"><span><i></i></span><strong>2 / 3 COACH VOTES</strong></div>
                    <p>Two verified spotters have reviewed this lift. One more coach vote will complete the form check.</p>
                    <div class="ft-coach-avatars"><span>DK</span><span>EK</span><span>?</span><small>1 MORE NEEDED</small></div>
                </section>
                <section class="ft-side-card ft-related-card">
                    <div class="ft-side-heading"><h2>RELATED DISCUSSIONS</h2><a href="/forum">VIEW ALL</a></div>
                    <a href="/forum/2"><span>GEAR DIAGNOSTICS</span><strong>29 mm bar knurl: comp vs aggressive</strong><small>84 replies &bull; 2h ago</small></a>
                    <a href="/forum/4"><span>MEET PREP</span><strong>Three cues for a stable squat walkout</strong><small>63 replies &bull; 14h ago</small></a>
                </section>
                <div class="ft-disclaimer"><svg class="icon"><use href="#forum-info"></use></svg> Community feedback is educational and is not a substitute for in-person coaching.</div>
            </aside>
        </div>
    </div>
</main>

<?php
require __DIR__ . '/components/footer.html.php';
require __DIR__ . '/components/mobile-nav.html.php';
?>
