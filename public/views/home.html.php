<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IronPulse is a verified strength telemetry network: audited gym equipment inventories, calibrated gear reviews, and a community of serious lifters.">
    <title><?= htmlspecialchars((string) $pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%230b1326'/%3E%3Cpath d='M7 12v8M10 9v14M22 9v14M25 12v8M10 16h12' stroke='%23c3f400' stroke-width='2' stroke-linecap='round'/%3E%3C/svg%3E">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<svg class="icon-sprite" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg">
    <symbol id="i-dumbbell" viewBox="0 0 24 24"><path d="M3 9v6M6.5 7v10M17.5 7v10M21 9v6M6.5 12h11"/></symbol>
    <symbol id="i-search" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M20 20l-3.6-3.6"/></symbol>
    <symbol id="i-scan" viewBox="0 0 24 24"><path d="M4 8V5a1 1 0 0 1 1-1h3M16 4h3a1 1 0 0 1 1 1v3M20 16v3a1 1 0 0 1-1 1h-3M8 20H5a1 1 0 0 1-1-1v-3M8 12h8"/></symbol>
    <symbol id="i-pin" viewBox="0 0 24 24"><path d="M12 21s7-6.2 7-11a7 7 0 1 0-14 0c0 4.8 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/></symbol>
    <symbol id="i-check" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M8.5 12.2l2.4 2.4 4.6-5"/></symbol>
    <symbol id="i-arrow-right" viewBox="0 0 24 24"><path d="M4 12h15M13 6l6 6-6 6"/></symbol>
    <symbol id="i-star" viewBox="0 0 24 24"><path d="M12 2.6l2.8 5.7 6.2.9-4.5 4.4 1.1 6.2-5.6-3-5.6 3 1.1-6.2L3 9.2l6.2-.9L12 2.6z" fill="currentColor" stroke="none"/></symbol>
    <symbol id="i-up" viewBox="0 0 24 24"><path d="M6 15l6-6 6 6"/></symbol>
    <symbol id="i-down" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></symbol>
    <symbol id="i-comment" viewBox="0 0 24 24"><path d="M21 11.5a7.5 7.5 0 0 1-7.5 7.5H8l-5 3 1.3-4.6A8.5 8.5 0 1 1 21 11.5z"/></symbol>
    <symbol id="i-eye" viewBox="0 0 24 24"><path d="M2.5 12S6 6 12 6s9.5 6 9.5 6-3.5 6-9.5 6-9.5-6-9.5-6z"/><circle cx="12" cy="12" r="2.5"/></symbol>
    <symbol id="i-bookmark" viewBox="0 0 24 24"><path d="M6 4h12v17l-6-4.2L6 21z"/></symbol>
    <symbol id="i-user" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4.5 21a7.5 7.5 0 0 1 15 0"/></symbol>
    <symbol id="i-flame" viewBox="0 0 24 24"><path d="M12 22c4 0 7-2.8 7-6.6 0-3.4-2-5.4-3.8-7.3C13.8 6.5 13 4.2 13 2c-2.5 2-4 4.7-4 7 0 1.3.4 2.2 1 3-1.7-.2-3-1.4-3.6-2.6C5.4 10.7 5 12 5 13.7 5 19 8 22 12 22z"/></symbol>
    <symbol id="i-play" viewBox="0 0 24 24"><path d="M8 5l11 7-11 7z"/></symbol>
    <symbol id="i-clock" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></symbol>
    <symbol id="i-shield" viewBox="0 0 24 24"><path d="M12 3l8 3v5.5c0 5-3.4 8.2-8 9.5-4.6-1.3-8-4.5-8-9.5V6l8-3z"/><path d="M8.5 12l2.4 2.4 4.6-5"/></symbol>
    <symbol id="i-trophy" viewBox="0 0 24 24"><path d="M8 4h8v5a4 4 0 0 1-8 0V4zM8 5H4v2a4 4 0 0 0 4 4M16 5h4v2a4 4 0 0 1-4 4M12 13v5M8 21h8M9 18h6"/></symbol>
    <symbol id="i-plus" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></symbol>
    <symbol id="i-barcode" viewBox="0 0 24 24"><path d="M4 6v12M7 6v12M10 6v12M14 6v12M17 6v12M20 6v12"/></symbol>
    <symbol id="i-grid" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></symbol>
    <symbol id="i-calendar" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></symbol>
</svg>

<div class="layout-desktop">
    <header class="site-header">
        <div class="container header-inner">
            <a class="brand" href="/" aria-label="IronPulse home">
                <span class="brand-mark"><svg class="icon"><use href="#i-dumbbell"></use></svg></span>
                <span class="brand-text"><strong>IRONPULSE</strong><small>TELEMETRY &amp; COMMUNITY</small></span>
            </a>
            <div class="header-status" aria-hidden="true"><svg class="icon"><use href="#i-barcode"></use></svg></div>
            <nav class="main-nav" aria-label="Primary">
                <a class="is-active" href="#reviews">Gym<br>Reviews</a>
                <a href="/gear">Gear<br>Inventory</a>
                <a href="/forum">Community<br>Forum</a>
                <a href="#leaderboard">Leaderboard</a>
                <a href="#submit">Submit<br>Gym</a>
            </nav>
            <div class="header-actions">
                <a class="icon-button" href="#leaderboard" aria-label="Saved bookmarks"><svg class="icon"><use href="#i-bookmark"></use></svg></a>
                <a class="avatar-button" href="#leaderboard" aria-label="Your profile"><svg class="icon"><use href="#i-user"></use></svg></a>
            </div>
        </div>
    </header>

    <main>
        <div class="telemetry-bar">
            <div class="container telemetry-inner">
                <div class="telemetry-status">
                    <span class="dot"></span>
                    <span>EQUIPMENT AUDIT REGISTRY ACTIVE</span>
                    <span class="muted">| 100% SPEC VERIFIED</span>
                </div>
                <div class="telemetry-stats">
                    <span><strong>3,420+</strong> AUDITED BENCHES</span>
                    <span><strong>1,890+</strong> CALIBRATED RACKS</span>
                    <span><strong class="text-lime">850+</strong> SPECIALTY BARS INDEXED</span>
                </div>
            </div>
        </div>

        <section class="hero">
            <span class="hero-glow hero-glow-lime" aria-hidden="true"></span>
            <span class="hero-glow hero-glow-blue" aria-hidden="true"></span>
            <div class="container hero-grid">
                <div class="hero-content">
                    <div class="eyebrow-row">
                        <span class="pill pill-lime">RAW &amp; VERIFIED STRENGTH PLATFORM</span>
                        <span class="pill pill-blue">EQUIPMENT INVENTORY AUDIT</span>
                    </div>
                    <h1>Find your next PR.<br>Inspect the iron.<br>Every rack &amp; bench.</h1>
                    <p class="hero-copy">Audited gear counts, verified barbell inventories, bench counts, and equipment rosters across hardcore powerlifting &amp; bodybuilding gyms.</p>
                    <div class="hero-stats">
                        <div class="hero-stat">
                            <span class="stat-label">COMPETITION BENCHES</span>
                            <strong class="stat-value text-lime">3,420+</strong>
                            <span class="stat-sub">TSS, ER &amp; Ghost units</span>
                        </div>
                        <div class="hero-stat">
                            <span class="stat-label">CALIBRATED RACKS</span>
                            <strong class="stat-value text-blue">1,890+</strong>
                            <span class="stat-sub">Combo racks &amp; power cages</span>
                        </div>
                        <div class="hero-stat">
                            <span class="stat-label">SPECIALTY BARS</span>
                            <strong class="stat-value">850+</strong>
                            <span class="stat-sub">SSB, Buffalo &amp; Trap bars</span>
                        </div>
                    </div>
                </div>

                <div class="console">
                    <div class="console-head">
                        <div class="console-title"><svg class="icon icon-lime"><use href="#i-grid"></use></svg><span>CONSOLE QUERY</span></div>
                        <span class="tag tag-muted">LIVE PROTOCOL</span>
                    </div>
                    <div class="console-tabs" role="tablist" aria-label="Console mode">
                        <button class="is-active" type="button" role="tab" aria-selected="true">FIND GYMS</button>
                        <button type="button" role="tab" aria-selected="false">GEAR INVENTORY</button>
                        <button type="button" role="tab" aria-selected="false">FORUMS</button>
                    </div>
                    <form class="console-form" action="/" method="get">
                        <label for="desktop-location">METRO OR ZIP CODE</label>
                        <div class="input-shell">
                            <svg class="icon"><use href="#i-pin"></use></svg>
                            <input id="desktop-location" name="location" type="text" value="Austin, TX (Downtown/South Congress)">
                            <button class="mini-button" type="button">AUTO</button>
                        </div>
                        <span class="filter-label">FILTER BY SPECIFICATIONS</span>
                        <div class="chip-row">
                            <button class="chip is-active" type="button"><svg class="icon"><use href="#i-check"></use></svg>Powerlifting</button>
                            <button class="chip" type="button">Olympic Weightlifting</button>
                            <button class="chip" type="button">24/7 Keycard</button>
                            <button class="chip" type="button">Strongman / Stones</button>
                            <button class="chip" type="button">Sauna / Cold Plunge</button>
                        </div>
                        <button class="primary-button primary-button-lg" type="submit">
                            <svg class="icon"><use href="#i-scan"></use></svg>
                            <span>SCAN VERIFIED SANCTUARIES</span>
                        </button>
                    </form>
                    <div class="console-foot">
                        <span class="status-inline"><span class="dot"></span>Verified via Lifter Geofence</span>
                        <span class="text-lime">100% INDEPENDENT</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="section inventory" id="inventory">
            <div class="container">
                <div class="section-head section-head-split">
                    <div>
                        <div class="eyebrow-row">
                            <span class="pill pill-lime">EQUIPMENT AUDIT ROSTER</span>
                            <span class="meta-label">VERIFIED CAPACITIES</span>
                        </div>
                        <h2>Verified gym equipment inventory &amp;<br>capacity</h2>
                        <p class="section-copy">Audited counts of competition benches, racks, platforms, and calibrated gear. Know exactly what iron is in the building before you step foot inside.</p>
                    </div>
                    <div class="section-actions">
                        <div class="karma-note">
                            <span class="text-lime">+25 AUDIT KARMA</span>
                            <span class="muted">for verifying facility specs</span>
                        </div>
                        <a class="secondary-button secondary-button-lg" href="#submit">
                            <svg class="icon"><use href="#i-plus"></use></svg>
                            <span>Submit Equipment Inventory<br>Update</span>
                        </a>
                    </div>
                </div>

                <div class="inventory-grid">
                    <article class="facility-card">
                        <div class="facility-head">
                            <div>
                                <span class="facility-location">DOWNTOWN AUSTIN &middot; 1.2 MI</span>
                                <h3>Metropolitan Iron<br>Club</h3>
                            </div>
                            <span class="tag tag-blue">AUDITED<br>SANCTUARY</span>
                        </div>
                        <div class="capacity">
                            <div class="capacity-head"><span>CAPACITY INDEX</span><span class="text-lime">TIER 1 POWERLIFTING</span></div>
                            <div class="capacity-track"><span class="capacity-fill"></span></div>
                        </div>
                        <div class="equipment-grid">
                            <div class="equipment-tile"><span class="tile-label"><span class="dot"></span>COMBO RACKS</span><strong>8 Units</strong><span class="tile-note text-lime">Eleiko &amp; ER</span></div>
                            <div class="equipment-tile"><span class="tile-label"><span class="dot"></span>COMP BENCHES</span><strong>6 Units</strong><span class="tile-note text-lime">Ghost &amp; TSS</span></div>
                            <div class="equipment-tile"><span class="tile-label">DEADLIFT DECKS</span><strong>4 Platforms</strong><span class="tile-note">With jacks</span></div>
                            <div class="equipment-tile"><span class="tile-label">CALIBRATED PLATES</span><strong>3 Full Sets</strong><span class="tile-note">Ivanko Calibrated</span></div>
                        </div>
                        <div class="facility-foot">
                            <span class="auditor"><svg class="icon icon-lime"><use href="#i-check"></use></svg>By @BigDan_83</span>
                            <a class="mini-button mini-button-solid" href="#reviews">View Inventory</a>
                        </div>
                    </article>

                    <article class="facility-card">
                        <div class="facility-head">
                            <div>
                                <span class="facility-location">NORTH INDUSTRIAL &middot; 4.8 MI</span>
                                <h3>Apex Strength &amp;<br>Conditioning</h3>
                            </div>
                            <span class="tag tag-steel">HEAVY IRON<br>HUB</span>
                        </div>
                        <div class="capacity">
                            <div class="capacity-head"><span>CAPACITY INDEX</span><span class="text-lime">EXPANSIVE ROSTER</span></div>
                            <div class="capacity-track"><span class="capacity-fill"></span></div>
                        </div>
                        <div class="equipment-grid">
                            <div class="equipment-tile"><span class="tile-label"><span class="dot"></span>POWER CAGES</span><strong>10 Units</strong><span class="tile-note text-lime">Full 3x3 11-Gauge</span></div>
                            <div class="equipment-tile"><span class="tile-label"><span class="dot"></span>COMP BENCHES</span><strong>8 Units</strong><span class="tile-note text-lime">Competition Footing</span></div>
                            <div class="equipment-tile"><span class="tile-label">DEADLIFT DECKS</span><strong>6 Platforms</strong><span class="tile-note">Band peg equipped</span></div>
                            <div class="equipment-tile"><span class="tile-label">SPECIALTY BARS</span><strong>18 Bars</strong><span class="tile-note">SSB, Kabuki, Buffalo</span></div>
                        </div>
                        <div class="facility-foot">
                            <span class="auditor"><svg class="icon icon-lime"><use href="#i-check"></use></svg>By @CoachSarah_K</span>
                            <a class="mini-button" href="#reviews">Inspect Roster</a>
                        </div>
                    </article>

                    <article class="facility-card">
                        <div class="facility-head">
                            <div>
                                <span class="facility-location text-blue">EAST AUSTIN YARDS &middot; 3.1 MI</span>
                                <h3>Vanguard Barbell<br>Co.</h3>
                            </div>
                            <span class="tag tag-blue-solid">24/7 KEYCARD<br>ACCESS</span>
                        </div>
                        <div class="capacity">
                            <div class="capacity-head"><span>CAPACITY INDEX</span><span class="text-blue">SPECIALTY SANCTUARY</span></div>
                            <div class="capacity-track"><span class="capacity-fill capacity-fill-blue"></span></div>
                        </div>
                        <div class="equipment-grid">
                            <div class="equipment-tile"><span class="tile-label"><span class="dot"></span>MONOS &amp; RACKS</span><strong>10 Units</strong><span class="tile-note text-lime">4 Monos, 6 Combos</span></div>
                            <div class="equipment-tile"><span class="tile-label"><span class="dot"></span>COMP BENCHES</span><strong>8 Units</strong><span class="tile-note text-lime">Fat pads &amp; IPF specs</span></div>
                            <div class="equipment-tile"><span class="tile-label">DEADLIFT DECKS</span><strong>5 Decks</strong><span class="tile-note">Full rubber &amp; oak</span></div>
                            <div class="equipment-tile"><span class="tile-label">POSTERIOR CHAIN</span><strong class="text-blue">2 Rev Hypers</strong><span class="tile-note">+ 4 Westside GHDs</span></div>
                        </div>
                        <div class="facility-foot">
                            <span class="auditor"><svg class="icon icon-blue"><use href="#i-check"></use></svg>By @ThorLiftsHeavy</span>
                            <a class="mini-button mini-button-blue" href="#reviews">View Inventory</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section reviews" id="reviews">
            <div class="container">
                <div class="section-head section-head-split reviews-head">
                    <div>
                        <span class="eyebrow-text text-lime">AUDITED FACILITY REPOSITORY</span>
                        <h2>Top rated &amp; trending gym<br>reviews</h2>
                        <p class="section-copy">Community-scored against hardcore powerlifting and weightlifting benchmarks: calibrated disc tolerance, knurl condition, deadlift jacks, and zero commercial fluff.</p>
                    </div>
                    <div class="filter-pills" aria-label="Review filters">
                        <button class="chip is-active" type="button">TOP RATED</button>
                        <button class="chip" type="button">HEAVY IRON / POWERLIFTING</button>
                        <button class="chip" type="button">BOUTIQUE STRENGTH</button>
                        <button class="chip" type="button">BEST 24/7 ACCESS</button>
                        <button class="chip" type="button">MOST PLATFORMS</button>
                    </div>
                </div>

                <div class="review-grid">
                    <article class="review-card">
                        <div class="review-media" style="background-image:url('/assets/img/forge-barbell.jpg')">
                            <div class="media-top">
                                <span class="media-badge"><svg class="icon icon-lime"><use href="#i-shield"></use></svg>AUDITED FACILITY</span>
                                <span class="rating"><svg class="icon"><use href="#i-star"></use></svg>4.98</span>
                            </div>
                            <div class="media-caption">
                                <span class="eyebrow-text text-lime">AUSTIN, TX</span>
                                <h3>The Forge Barbell Club</h3>
                            </div>
                        </div>
                        <div class="review-body">
                            <dl class="spec-list">
                                <div><dt><svg class="icon icon-lime"><use href="#i-check"></use></svg>Chalk Allowed:</dt><dd><strong>Yes</strong> <span>(Unrestricted)</span></dd></div>
                                <div><dt><svg class="icon icon-lime"><use href="#i-check"></use></svg>Bumper Plates:</dt><dd>Eleiko IWF</dd></div>
                                <div><dt><svg class="icon icon-lime"><use href="#i-check"></use></svg>Squat Racks:</dt><dd><strong>14 Monos &amp; Power</strong></dd></div>
                                <div><dt><svg class="icon icon-blue"><use href="#i-check"></use></svg>Dumbbells:</dt><dd>Up to 180 lbs</dd></div>
                            </dl>
                            <blockquote class="quote">
                                <p>&ldquo;No commercial music restrictions, calibrated Ivanko discs, deadlift jacks at every single platform. Pure lifting sanctuary.&rdquo;</p>
                                <footer><span class="text-lime">VERIFIED COMPETITOR</span><span class="muted">&middot; @MarcusVance (USAPL 83kg)</span></footer>
                            </blockquote>
                            <div class="tag-row">
                                <span class="tag tag-steel">Competition Benches</span>
                                <span class="tag tag-steel">Chalk Bowls</span>
                                <span class="tag tag-steel">No Contract</span>
                            </div>
                            <div class="review-meta">
                                <span class="muted">Rated by 340 lifters</span>
                                <a class="text-link" href="#reviews">Full Specs <svg class="icon"><use href="#i-arrow-right"></use></svg></a>
                            </div>
                        </div>
                    </article>

                    <article class="review-card">
                        <div class="review-media" style="background-image:url('/assets/img/iron-haven.jpg')">
                            <div class="media-top">
                                <span class="media-badge"><svg class="icon icon-lime"><use href="#i-shield"></use></svg>AUDITED FACILITY</span>
                                <span class="rating"><svg class="icon"><use href="#i-star"></use></svg>4.92</span>
                            </div>
                            <div class="media-caption">
                                <span class="eyebrow-text text-lime">COLUMBUS, OH</span>
                                <h3>Iron Haven Compound</h3>
                            </div>
                        </div>
                        <div class="review-body">
                            <dl class="spec-list">
                                <div><dt><svg class="icon icon-lime"><use href="#i-check"></use></svg>Chalk Allowed:</dt><dd><strong>Yes</strong> <span>(Provided)</span></dd></div>
                                <div><dt><svg class="icon icon-lime"><use href="#i-check"></use></svg>Bumper Plates:</dt><dd><strong>Rogue Competition</strong></dd></div>
                                <div><dt><svg class="icon icon-lime"><use href="#i-check"></use></svg>Squat Racks:</dt><dd><strong>18 Combo Units</strong></dd></div>
                                <div><dt><svg class="icon icon-blue"><use href="#i-check"></use></svg>Dumbbells:</dt><dd>Up to 200 lbs</dd></div>
                            </dl>
                            <blockquote class="quote">
                                <p>&ldquo;12 dedicated deadlift platforms, custom knurled Texas power bars, and zero judgement on dropping heavy pulls. Exceptional vibe.&rdquo;</p>
                                <footer><span class="text-blue">POWERLIFTING COACH</span><span class="muted">&middot; @CoachSarah_K (IPF Certified)</span></footer>
                            </blockquote>
                            <div class="tag-row">
                                <span class="tag tag-steel">Ghost Roller J-Cups</span>
                                <span class="tag tag-steel">Monolifts</span>
                                <span class="tag tag-steel">Ice Bath</span>
                            </div>
                            <div class="review-meta">
                                <span class="muted">Rated by 412 lifters</span>
                                <a class="text-link" href="#reviews">Full Specs <svg class="icon"><use href="#i-arrow-right"></use></svg></a>
                            </div>
                        </div>
                    </article>

                    <article class="review-card">
                        <div class="review-media" style="background-image:url('/assets/img/black-iron.jpg')">
                            <div class="media-top">
                                <span class="media-badge"><svg class="icon icon-lime"><use href="#i-shield"></use></svg>AUDITED FACILITY</span>
                                <span class="rating"><svg class="icon"><use href="#i-star"></use></svg>4.89</span>
                            </div>
                            <div class="media-caption">
                                <span class="eyebrow-text text-lime">SEATTLE, WA</span>
                                <h3>Black Iron Bastion</h3>
                            </div>
                        </div>
                        <div class="review-body">
                            <dl class="spec-list">
                                <div><dt><svg class="icon icon-lime"><use href="#i-check"></use></svg>Chalk Allowed:</dt><dd><strong>Yes</strong> <span>(Unmetered)</span></dd></div>
                                <div><dt><svg class="icon icon-lime"><use href="#i-check"></use></svg>Bumper Plates:</dt><dd><strong>Uesaka &amp; Rogue</strong></dd></div>
                                <div><dt><svg class="icon icon-lime"><use href="#i-check"></use></svg>Squat Racks:</dt><dd><strong>10 Full Power Cages</strong></dd></div>
                                <div><dt><svg class="icon icon-blue"><use href="#i-check"></use></svg>Dumbbells:</dt><dd>Up to 160 lbs</dd></div>
                            </dl>
                            <blockquote class="quote">
                                <p>&ldquo;A cathedral of strength. Calibrated thin plates ensure you can load 700+ without running out of sleeve room. Best bar stock on the West Coast.&rdquo;</p>
                                <footer><span class="text-orange">STRONGMAN PRO</span><span class="muted">&middot; @ThorLiftsHeavy</span></footer>
                            </blockquote>
                            <div class="tag-row">
                                <span class="tag tag-steel">Atlas Stones</span>
                                <span class="tag tag-steel">Sling Shot Allowed</span>
                                <span class="tag tag-steel">Recovery Sauna</span>
                            </div>
                            <div class="review-meta">
                                <span class="muted">Rated by 288 lifters</span>
                                <a class="text-link" href="#reviews">Full Specs <svg class="icon"><use href="#i-arrow-right"></use></svg></a>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="reviews-footer">
                    <div class="reviews-footer-copy">
                        <svg class="icon icon-lime"><use href="#i-pin"></use></svg>
                        <div>
                            <strong>Looking for a specific gym or gear setup?</strong>
                            <span class="muted">Over 14,200 powerlifting, weightlifting, and strongman hubs mapped worldwide.</span>
                        </div>
                    </div>
                    <div class="reviews-footer-actions">
                        <a class="secondary-button" href="#submit">Write a Gym Review</a>
                        <a class="primary-button" href="#submit">Explore All 14,200+ Gyms</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section community" id="forum">
            <div class="container community-grid">
                <div class="forum-column">
                    <div class="forum-head">
                        <div>
                            <span class="eyebrow-text text-blue">UNFILTERED TELEMETRY &amp; ADVICE</span>
                            <h2>The locker room &amp; iron forum</h2>
                        </div>
                        <a class="primary-button primary-button-sm" href="#forum"><svg class="icon"><use href="#i-plus"></use></svg>START A DISCUSSION</a>
                    </div>
                    <div class="forum-filters">
                        <button class="chip is-active" type="button">ALL DISCUSSIONS</button>
                        <button class="chip" type="button">TRENDING HOT</button>
                        <button class="chip" type="button">FORM CHECK</button>
                        <button class="chip" type="button">GEAR REVIEWS</button>
                        <button class="chip" type="button">STRENGTH PROGRAMMING</button>
                    </div>

                    <div class="thread-list">
                        <article class="thread">
                            <div class="vote"><button type="button" aria-label="Upvote"><svg class="icon"><use href="#i-up"></use></svg></button><strong>342</strong><button type="button" aria-label="Downvote"><svg class="icon"><use href="#i-down"></use></svg></button></div>
                            <div class="thread-body">
                                <div class="thread-meta">
                                    <span class="tag tag-hot">HOT THREAD</span>
                                    <span class="tag tag-steel">GYM PSA</span>
                                    <span class="muted">Metro Iron (Downtown)</span>
                                    <span class="muted">&middot; 18 min ago</span>
                                </div>
                                <h3><a href="#forum">[Gym PSA] How Metro Iron handles the 5 PM rush &mdash; Rack reservation etiquette breakdown</a></h3>
                                <p>PSA for visiting lifters: don&rsquo;t reserve squat rack 4 if you plan to do 20 minutes of dynamic warmups. The gym manager announced new floor guidelines for peak hours...</p>
                                <div class="thread-foot">
                                    <span class="author"><span class="author-avatar">JD</span>@J_Donnelly <span class="tag tag-steel">IPF Competitor</span></span>
                                    <span class="thread-stat"><svg class="icon"><use href="#i-comment"></use></svg>88 replies</span>
                                    <span class="thread-stat"><svg class="icon"><use href="#i-eye"></use></svg>2.4k views</span>
                                </div>
                            </div>
                        </article>

                        <article class="thread">
                            <div class="vote"><button type="button" aria-label="Upvote"><svg class="icon"><use href="#i-up"></use></svg></button><strong>512</strong><button type="button" aria-label="Downvote"><svg class="icon"><use href="#i-down"></use></svg></button></div>
                            <div class="thread-body">
                                <div class="thread-meta">
                                    <span class="tag tag-steel text-blue">GEAR REVIEW</span>
                                    <span class="muted">Barbell Diagnostics</span>
                                    <span class="muted">&middot; 2 hours ago</span>
                                </div>
                                <h3><a href="#forum">[Gear Review] Eleiko Oppen Deadlift Bar vs Rogue TB-2: Commercial gym durability test after 6 months</a></h3>
                                <p>We subjected both specialty trap bars to 500+ daily deadlift sets. Knurling wear, sleeve chrome peeling, and center-balance feedback over 180 days of abuse...</p>
                                <div class="thread-foot">
                                    <span class="author"><span class="author-avatar author-avatar-blue">TB</span>@T_BarbellLab <span class="tag tag-steel">Facility Owner</span></span>
                                    <span class="thread-stat"><svg class="icon"><use href="#i-comment"></use></svg>143 replies</span>
                                    <span class="thread-stat"><svg class="icon"><use href="#i-trophy"></use></svg>3 Awards</span>
                                </div>
                            </div>
                        </article>

                        <article class="thread">
                            <div class="vote"><button type="button" aria-label="Upvote"><svg class="icon"><use href="#i-up"></use></svg></button><strong>189</strong><button type="button" aria-label="Downvote"><svg class="icon"><use href="#i-down"></use></svg></button></div>
                            <div class="thread-body">
                                <div class="thread-meta">
                                    <span class="tag tag-steel text-lime">CITY GUIDE</span>
                                    <span class="muted">Austin &amp; Dallas</span>
                                    <span class="muted">&middot; 4 hours ago</span>
                                </div>
                                <h3><a href="#forum">[City Guide] Hidden gem powerlifting garages in Austin &amp; Dallas with 24/7 drop-in rates</a></h3>
                                <p>Traveling for work? Here are five private keycard garage gyms that welcome drop-ins, have calibrated steel plates, and won&rsquo;t charge $45 a day like mainstream boxes...</p>
                                <div class="thread-foot">
                                    <span class="author"><span class="author-avatar author-avatar-steel">RT</span>@RoadWarrior_PR</span>
                                    <span class="thread-stat"><svg class="icon"><use href="#i-comment"></use></svg>42 replies</span>
                                </div>
                            </div>
                        </article>

                        <article class="thread">
                            <div class="vote"><button type="button" aria-label="Upvote"><svg class="icon"><use href="#i-up"></use></svg></button><strong>276</strong><button type="button" aria-label="Downvote"><svg class="icon"><use href="#i-down"></use></svg></button></div>
                            <div class="thread-body">
                                <div class="thread-meta">
                                    <span class="tag tag-steel text-lime"><svg class="icon"><use href="#i-play"></use></svg>VIDEO ATTACHED</span>
                                    <span class="tag tag-steel text-blue">FORM CHECK</span>
                                    <span class="muted">&middot; 6 hours ago</span>
                                </div>
                                <h3><a href="#forum">[Form Check Friday] 500lb Low-Bar Squat depth and bar path analysis</a></h3>
                                <p>Hit a 500x3 low bar set at Vanguard Barbell. Looking for feedback on hip crease below parallel and thoracic tension on the ascent. Video recorded with side angle marker...</p>
                                <div class="thread-foot">
                                    <span class="author"><span class="author-avatar author-avatar-lime">AL</span>@Alex_Lith</span>
                                    <span class="thread-stat"><svg class="icon"><use href="#i-comment"></use></svg>95 replies</span>
                                    <span class="thread-stat"><svg class="icon"><use href="#i-check"></use></svg>Coached Feedback</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <aside class="community-aside" id="leaderboard">
                    <div class="leaderboard">
                        <div class="leaderboard-head">
                            <div><span class="eyebrow-text text-lime">PEER INTELLIGENCE</span><h3>Top gear spotters</h3></div>
                            <span class="tag tag-steel">THIS WEEK</span>
                        </div>
                        <p class="aside-copy">Lifters logging accurate floor reports, rack statuses, and equipment audits earn platform karma badges.</p>
                        <ol class="spotter-list">
                            <li><span class="rank text-lime">#1</span><span class="spotter-avatar">EK</span><span class="spotter-name"><strong>@Elena_K</strong><small class="text-lime">MASTER SPOTTER &middot; 840 REP</small></span><span class="spotter-count">42 Updates</span></li>
                            <li><span class="rank text-blue">#2</span><span class="spotter-avatar">MK</span><span class="spotter-name"><strong>@Marcus_K</strong><small class="text-blue">IRON SCOUT &middot; 610 REP</small></span><span class="spotter-count">31 Updates</span></li>
                            <li><span class="rank text-orange">#3</span><span class="spotter-avatar">DL</span><span class="spotter-name"><strong>@DaveLiftz</strong><small class="text-orange">EQUIPMENT AUDITOR</small></span><span class="spotter-count">27 Updates</span></li>
                            <li><span class="rank muted">#4</span><span class="spotter-avatar">TR</span><span class="spotter-name"><strong>@TaraRacks</strong><small class="muted">VERIFIED LIFTER</small></span><span class="spotter-count">19 Updates</span></li>
                        </ol>
                        <a class="text-link text-link-center" href="#leaderboard">VIEW GLOBAL KARMA BOARD <svg class="icon"><use href="#i-arrow-right"></use></svg></a>
                    </div>

                    <div class="submit-banner" id="submit">
                        <span class="eyebrow-text text-lime"><svg class="icon"><use href="#i-pin"></use></svg>EXPAND THE NETWORK</span>
                        <h3>Know a hardcore powerlifting bunker not on IronPulse?</h3>
                        <p>Submit local specialty facilities, underground weightlifting basements, or keycard strength clubs. We dispatch an auditor to verify plates and rack capacity.</p>
                        <a class="primary-button" href="#submit">SUBMIT AN UNLISTED GYM</a>
                    </div>

                    <div class="pr-widget">
                        <div class="pr-head"><span>LIFTER PR OF THE DAY</span><svg class="icon icon-lime"><use href="#i-flame"></use></svg></div>
                        <div class="pr-value"><strong>765 LBS</strong><span class="text-lime">RAW DEADLIFT</span></div>
                        <p>Pulled by @BigDan_83 at Metropolitan Iron Club with calibrated Ivanko plates.</p>
                    </div>
                </aside>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-status">
            <div class="container footer-status-inner">
                <div class="footer-status-left">
                    <span class="status-inline"><span class="dot"></span>TELEMETRY NETWORK ONLINE</span>
                    <span class="muted">LATENCY: 14MS</span>
                </div>
                <div class="footer-status-right">
                    <span><strong>14,248</strong> GYMS LOGGED</span>
                    <span><strong>89,412</strong> ACTIVE LIFTERS</span>
                    <span><strong class="text-lime">99.8%</strong> GEAR ACCURACY</span>
                </div>
            </div>
        </div>
        <div class="container footer-grid">
            <div class="footer-brand">
                <div class="brand"><span class="brand-mark"><svg class="icon"><use href="#i-dumbbell"></use></svg></span><span class="brand-text"><strong>IRONPULSE</strong></span></div>
                <p>High-performance gym intelligence, calibrated barbell verification, and peer telemetry for competitive powerlifters, olympic weightlifters, and iron athletes worldwide.</p>
                <div class="tag-row"><span class="tag tag-steel text-lime">CALIBRATED STANDARDS</span><span class="tag tag-steel text-blue">GEAR CAPACITY AUDIT</span></div>
            </div>
            <nav class="footer-col" aria-label="Discovery and data">
                <h4>DISCOVERY &amp; DATA</h4>
                <a href="#inventory">Powerlifting Dens</a>
                <a href="#inventory">Olympic Weightlifting Halls</a>
                <a href="#inventory">Eleiko &amp; Rogue Tracker</a>
                <a href="#inventory">Monolift Directory</a>
                <a href="#inventory">Facility Auditing</a>
            </nav>
            <nav class="footer-col" aria-label="Community hub">
                <h4>COMMUNITY HUB</h4>
                <a href="#forum">Technique &amp; Dial-in</a>
                <a href="#forum">Equipment Sourcing</a>
                <a href="#leaderboard">PR Hall of Fame</a>
                <a href="#forum">Meet Sanctions &amp; Dates</a>
                <a href="#forum">Chalk &amp; Bar Care Guides</a>
            </nav>
            <nav class="footer-col" aria-label="Platform and specs">
                <h4>PLATFORM &amp; SPECS</h4>
                <a href="#submit">Telemetry API</a>
                <a href="#submit">Equipment Verification Policy</a>
                <a href="#submit">Gym Owner Portal</a>
                <a href="#submit">Privacy &amp; Biometrics</a>
                <a href="#submit">Code of Conduct</a>
            </nav>
        </div>
        <div class="container footer-bottom">
            <span>&copy; 2025 IronPulse Athletic Network. Engineered for athletes who lift heavy.</span>
            <div><a href="#submit">Terms of Telemetry</a><a href="#submit">Security Protocol</a><a href="#submit">Server Health</a></div>
        </div>
    </footer>
</div>

<div class="layout-mobile">
    <header class="m-header">
        <div class="brand">
            <span class="brand-mark"><svg class="icon"><use href="#i-dumbbell"></use></svg></span>
            <span class="brand-text"><strong>IRONPULSE</strong></span>
        </div>
        <span class="live-badge"><span class="dot"></span>LIVE</span>
        <a class="avatar-button" href="#m-board" aria-label="Your profile"><svg class="icon"><use href="#i-user"></use></svg></a>
    </header>

    <main class="m-main">
        <section class="m-hero">
            <div class="network-pill"><span class="dot"></span>TELEMETRY NETWORK // 142 AUDITED SANCTUARIES</div>
            <h1>Zero Fluff.<br>Calibrated Steel.</h1>
            <p>Real-time telemetry on IPF-spec armories, calibrated plate tolerances, and serious lifters.</p>
            <div class="chip-row m-chip-row">
                <button class="chip is-active" type="button"><svg class="icon"><use href="#i-check"></use></svg>24/7 KEYCARD</button>
                <button class="chip" type="button"><svg class="icon"><use href="#i-shield"></use></svg>CALIBRATED STEEL</button>
                <button class="chip" type="button"><svg class="icon"><use href="#i-star"></use></svg>ELEIKO COMP</button>
                <button class="chip" type="button"><svg class="icon"><use href="#i-grid"></use></svg>MONOLIFT</button>
            </div>
            <form class="m-search" action="/" method="get">
                <svg class="icon"><use href="#i-search"></use></svg>
                <input type="search" name="location" placeholder="Search gyms, calibrated bars, lifters..." aria-label="Search">
                <button class="m-scan" type="button" aria-label="Scan barcode or spec tag"><svg class="icon"><use href="#i-barcode"></use></svg></button>
            </form>
            <div class="m-stat-strip">
                <div><strong>1.9M</strong><span>KG VERIFIED<br>IRON</span></div>
                <div><strong class="text-lime">18.4K</strong><span>AUDITED LIFTERS</span></div>
                <div><strong class="text-blue">99.8%</strong><span>SPEC<br>HARDWARE</span></div>
            </div>
        </section>

        <section class="m-section" id="m-radar">
            <div class="m-section-head">
                <div class="m-title"><svg class="icon icon-lime"><use href="#i-pin"></use></svg><h2>Sanctuary Radar</h2></div>
                <span class="meta-label">3.2 KM AWAY</span>
            </div>
            <article class="sanctuary-card">
                <div class="sanctuary-media" style="background-image:url('/assets/img/metro-iron.jpg')">
                    <span class="media-badge"><span class="dot"></span>34% CROWD // 14 BARS FREE</span>
                    <span class="spec-badge"><svg class="icon"><use href="#i-shield"></use></svg>99.8% SPEC</span>
                </div>
                <div class="sanctuary-body">
                    <div class="sanctuary-title"><h3>Metropolitan Iron Club</h3><span class="rating-text"><svg class="icon"><use href="#i-star"></use></svg>4.98</span></div>
                    <span class="sanctuary-location"><svg class="icon"><use href="#i-pin"></use></svg>Austin, TX &middot; 1,200 m&sup2; Armory Ground</span>
                    <div class="m-equipment-grid">
                        <div><strong>18</strong><span>COMBO<br>RACKS</span></div>
                        <div><strong class="text-lime">18.4T</strong><span>CAL. PLATES</span></div>
                        <div><strong class="text-blue">3</strong><span>MONOLIFTS</span></div>
                    </div>
                    <div class="sanctuary-foot">
                        <span class="auditor"><svg class="icon icon-lime"><use href="#i-check"></use></svg>AUDITED 2D AGO // IPF SPEC</span>
                        <a class="text-link" href="#m-radar">ARMORY SPEC <svg class="icon"><use href="#i-arrow-right"></use></svg></a>
                    </div>
                </div>
            </article>
        </section>

        <section class="m-section" id="m-board">
            <div class="m-section-head">
                <div class="m-title"><svg class="icon icon-blue"><use href="#i-trophy"></use></svg><h2>Today's Benchmark</h2></div>
                <a class="text-link" href="#m-board">FULL BOARD (1,482) <svg class="icon"><use href="#i-arrow-right"></use></svg></a>
            </div>
            <article class="record-card">
                <div class="record-head">
                    <div class="record-athlete">
                        <span class="record-avatar" style="background-image:url('/assets/img/marcus-vance.jpg')"><span>1</span></span>
                        <div class="record-name"><strong>Marcus Vance</strong><span class="tag tag-steel text-blue">105 KG</span><small>Metro Iron Club &middot; Austin, TX</small></div>
                    </div>
                    <div class="record-total"><strong>991.0 <small>KG</small></strong><span class="text-blue">582.4 DOTS</span></div>
                </div>
                <div class="lift-strip">
                    <div><span>SQUAT</span><strong>360.5 <small>kg</small></strong></div>
                    <div><span>BENCH</span><strong>229.0 <small>kg</small></strong></div>
                    <div><span>DEADLIFT</span><strong class="text-lime">401.5 <small>kg</small></strong></div>
                </div>
            </article>
        </section>

        <section class="m-section" id="m-forum">
            <div class="m-section-head">
                <div class="m-title"><svg class="icon icon-lime"><use href="#i-flame"></use></svg><h2>The Locker Room</h2></div>
                <span class="live-badge live-badge-plain"><span class="dot"></span>184 ACTIVE</span>
            </div>
            <article class="m-thread">
                <div class="m-vote"><svg class="icon"><use href="#i-up"></use></svg><strong>619</strong></div>
                <div class="m-thread-body">
                    <div class="thread-meta"><span class="tag tag-steel text-lime">BARBELL WEAR</span><span class="muted">2h ago</span></div>
                    <h3>[Knurl Wear] Eleiko IPF Comp vs Rogue Ohio Power Bar: 2-Year Tooth Decay</h3>
                    <div class="thread-foot"><span class="thread-stat"><svg class="icon"><use href="#i-comment"></use></svg>84 DEBATERS</span><span class="thread-stat text-blue"><svg class="icon"><use href="#i-star"></use></svg>9.4/10 TECHNICAL RATING</span></div>
                </div>
            </article>
            <article class="m-thread">
                <div class="m-video" style="background-image:url('/assets/img/form-check.jpg')"><span class="m-play"><svg class="icon"><use href="#i-play"></use></svg></span><span class="m-duration">0:42</span></div>
                <div class="m-thread-body">
                    <div class="thread-meta"><span class="live-badge live-badge-red"><span class="dot"></span>RPE 9.5 COACH REVIEW</span></div>
                    <h3>Lockout hitch check on 315kg raw low-bar</h3>
                    <p>Coach Dan: &ldquo;Slight knee cave on ascent transition...&rdquo;</p>
                </div>
            </article>
        </section>

        <section class="m-section" id="m-submit">
            <div class="m-section-head">
                <div class="m-title"><svg class="icon icon-lime"><use href="#i-shield"></use></svg><h2>Auditor Protocol</h2></div>
            </div>
            <div class="m-action-grid">
                <a class="m-action-card" href="#m-submit">
                    <div class="m-action-top"><span class="m-action-icon"><svg class="icon"><use href="#i-plus"></use></svg></span><span class="text-lime">+250 XP</span></div>
                    <strong>Submit Armory</strong>
                    <span>Audit underground gym equipment &amp; racks</span>
                </a>
                <a class="m-action-card" href="#m-submit">
                    <div class="m-action-top"><span class="m-action-icon m-action-icon-blue"><svg class="icon"><use href="#i-shield"></use></svg></span><span class="text-blue">+25 XP</span></div>
                    <strong>Audit Knurling</strong>
                    <span>Report plate slack or dull barbell knurl</span>
                </a>
            </div>
        </section>
    </main>

    <nav class="m-nav" aria-label="Mobile">
        <a href="#m-board"><svg class="icon"><use href="#i-trophy"></use></svg><span>BOARD</span></a>
        <a href="/forum"><svg class="icon"><use href="#i-comment"></use></svg><span>FORUM</span></a>
        <a href="/gear"><svg class="icon"><use href="#i-dumbbell"></use></svg><span>GEAR</span></a>
        <a href="#m-submit"><svg class="icon"><use href="#i-plus"></use></svg><span>SUBMIT</span></a>
    </nav>
</div>
</body>
</html>
