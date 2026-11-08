<?php

declare(strict_types=1);

$formTitle = (string) ($formValues['title'] ?? '');
$formBody = (string) ($formValues['body'] ?? '');
$formChannel = (string) ($formValues['channel'] ?? 'equipment');
$formTags = is_array($formValues['tags'] ?? null) ? $formValues['tags'] : [];
?>
<svg class="icon-sprite" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg">
    <symbol id="forum-dumbbell" viewBox="0 0 24 24"><path d="M3 9v6M6.5 7v10M17.5 7v10M21 9v6M6.5 12h11"/></symbol>
    <symbol id="forum-user" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4.5 21a7.5 7.5 0 0 1 15 0"/></symbol>
    <symbol id="forum-search" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m20 20-4-4"/></symbol>
    <symbol id="forum-plus" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></symbol>
    <symbol id="forum-chat" viewBox="0 0 24 24"><path d="M21 11.5a7.5 7.5 0 0 1-7.5 7.5H8l-5 3 1.3-4.6A8.5 8.5 0 1 1 21 11.5Z"/></symbol>
    <symbol id="forum-up" viewBox="0 0 24 24"><path d="m6 15 6-6 6 6"/></symbol>
    <symbol id="forum-shield" viewBox="0 0 24 24"><path d="m12 3 8 3v5.5c0 5-3.4 8.2-8 9.5-4.6-1.3-8-4.5-8-9.5V6l8-3Z"/><path d="m8.5 12 2.4 2.4 4.6-5"/></symbol>
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
    <symbol id="forum-check" viewBox="0 0 24 24"><path d="m5 12 4 4L19 6"/></symbol>
    <symbol id="forum-tag" viewBox="0 0 24 24"><path d="M20.6 13.4 13.4 20.6a2 2 0 0 1-2.8 0L3 13V4h9l8.6 8.6a.6.6 0 0 1 0 .8Z"/><circle cx="7.5" cy="8.5" r="1"/></symbol>
    <symbol id="forum-lock" viewBox="0 0 24 24"><rect x="4" y="10" width="16" height="11" rx="2"/><path d="M8 10V7a4 4 0 1 1 8 0v3m-4 5v2"/></symbol>
    <symbol id="forum-bold" viewBox="0 0 24 24"><path d="M7 5h6a4 4 0 0 1 0 8H7zm0 8h7a4 4 0 0 1 0 8H7z"/></symbol>
    <symbol id="forum-italic" viewBox="0 0 24 24"><path d="M19 4h-9m4 16H5m9-16-4 16"/></symbol>
    <symbol id="forum-quote" viewBox="0 0 24 24"><path d="M10 11H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5v7Zm11 0h-5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5v7ZM3 11v2a7 7 0 0 0 7 7m4-9v2a7 7 0 0 0 7 7"/></symbol>
    <symbol id="forum-list" viewBox="0 0 24 24"><path d="M9 6h12M9 12h12M9 18h12M4 6h.01M4 12h.01M4 18h.01"/></symbol>
    <symbol id="forum-link" viewBox="0 0 24 24"><path d="M10 13a5 5 0 0 0 7.1 0l3-3A5 5 0 0 0 13 2.9l-1.7 1.7m2.7 6.4a5 5 0 0 0-7.1 0l-3 3A5 5 0 0 0 11 21.1l1.7-1.7"/></symbol>
</svg>

<?php
require __DIR__ . '/components/desktop-header.html.php';
require __DIR__ . '/components/mobile-header.html.php';
?>

<main class="fp-main">
    <div class="forum-container">
        <nav class="fp-breadcrumb" aria-label="Breadcrumb">
            <a href="/forum">FORUM // THE LOCKER ROOM</a><span>/</span><strong>CREATE DISCUSSION POST</strong>
        </nav>
        <div class="fp-status"><i></i>PROTOCOL 04 // COMPOSITION <span>NODE: US-CENTRAL-AUSTIN</span></div>

        <div class="fp-layout">
            <form class="fp-compose" action="/forum/new" method="post" enctype="multipart/form-data" data-post-form>
                <header class="fp-page-heading">
                    <div>
                        <h1>Publish Post to The Locker Room</h1>
                        <p>Share knurling analysis, form check telemetry, gear debates, or meet prep protocols with 18.4K verified lifters. Zero fluff. Steel only.</p>
                    </div>
                    <span class="fp-enforcement"><small>SYSTEM ENFORCEMENT</small><strong>METRIC SI-SYSTEM ONLY</strong><svg class="icon"><use href="#forum-scale"></use></svg></span>
                </header>

                <?php if (is_string($formMessage ?? null) && $formMessage !== ''): ?>
                    <p class="fp-notice fp-notice-<?= htmlspecialchars((string) $formMessageType, ENT_QUOTES, 'UTF-8') ?>" role="status" aria-live="polite" data-post-notice><?= htmlspecialchars($formMessage, ENT_QUOTES, 'UTF-8') ?></p>
                <?php else: ?>
                    <p class="fp-notice" role="status" aria-live="polite" data-post-notice hidden></p>
                <?php endif; ?>

                <section class="fp-panel fp-channel-panel" aria-labelledby="fp-channel-title">
                    <div class="fp-section-heading">
                        <h2 id="fp-channel-title"><i></i> SELECT SPECIALIZED CHANNEL</h2>
                        <span>MANDATORY SELECTION</span>
                    </div>
                    <div class="fp-channel-grid">
                        <?php
                        $channelDetails = [
                            'equipment' => ['icon' => 'bars', 'label' => 'Equipment & Knurling', 'description' => 'BAR SPECS / PLATES / TOLERANCE'],
                            'form-check' => ['icon' => 'camera', 'label' => 'Form Check Telemetry', 'description' => 'OPTICJUMP / LASER / 60FPS'],
                            'meet-prep' => ['icon' => 'calendar', 'label' => 'Meet Prep & Peaking', 'description' => 'PEAK / WATER / ATTEMPTS'],
                            'sanctuary' => ['icon' => 'shield', 'label' => 'Sanctuary Audits', 'description' => 'RACK COUNT / CALIBRATION'],
                            'bar-velocity' => ['icon' => 'chart', 'label' => 'Barbell Velocity', 'description' => 'M/S SENSORS / ACCEL'],
                        ];
                        foreach ($forumPostChannels as $value => $label):
                            $detail = $channelDetails[$value];
                        ?>
                            <label class="fp-channel-option<?= $formChannel === $value ? ' is-selected' : '' ?>">
                                <input type="radio" name="channel" value="<?= htmlspecialchars($value, ENT_QUOTES, 'UTF-8') ?>"<?= $formChannel === $value ? ' checked' : '' ?> required>
                                <svg class="icon"><use href="#forum-<?= htmlspecialchars($detail['icon'], ENT_QUOTES, 'UTF-8') ?>"></use></svg>
                                <strong><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></strong>
                                <small><?= htmlspecialchars($detail['description'], ENT_QUOTES, 'UTF-8') ?></small>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </section>

                <section class="fp-panel fp-title-panel" aria-labelledby="fp-title-label">
                    <div class="fp-title-label">
                        <label for="fp-title" id="fp-title-label">DISCUSSION TITLE</label>
                        <span class="fp-counter"><b data-title-count><?= strlen($formTitle) ?></b> / 150 CHARACTERS</span>
                    </div>
                    <input id="fp-title" name="title" type="text" maxlength="150" value="<?= htmlspecialchars($formTitle, ENT_QUOTES, 'UTF-8') ?>" placeholder="What should the strength community know?" data-title-input>
                    <div class="fp-tags" aria-label="Discussion tags" data-tag-list>
                        <strong>TAXONOMY:</strong>
                        <?php foreach ($formTags as $tag): ?>
                            <?php if (is_string($tag) && $tag !== ''): ?>
                                <span class="fp-tag"><i>#</i><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?><input type="hidden" name="tags[]" value="<?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?>" data-tag-value><button type="button" aria-label="Remove <?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?> tag" data-remove-tag>&times;</button></span>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <label class="fp-add-tag"><span aria-hidden="true">+</span><input type="text" maxlength="24" placeholder="Add Tag" aria-label="New discussion tag" data-tag-input></label>
                    </div>
                </section>

                <section class="fp-panel fp-editor-panel" aria-label="Post content editor">
                    <div class="fp-editor-toolbar">
                        <div class="fp-editor-tabs" role="tablist" aria-label="Editor mode">
                            <button type="button" class="is-active" role="tab" aria-selected="true" data-editor-tab="write">WRITE // RAW</button>
                            <button type="button" role="tab" aria-selected="false" data-editor-tab="preview">PREVIEW TELEMETRY</button>
                        </div>
                        <div class="fp-format-tools" aria-label="Text formatting">
                            <button type="button" aria-label="Bold" data-format="bold"><svg class="icon"><use href="#forum-bold"></use></svg></button>
                            <button type="button" aria-label="Italic" data-format="italic"><svg class="icon"><use href="#forum-italic"></use></svg></button>
                            <button type="button" aria-label="Insert list" data-format="list"><svg class="icon"><use href="#forum-list"></use></svg></button>
                            <button type="button" aria-label="Quote" data-format="quote"><svg class="icon"><use href="#forum-quote"></use></svg></button>
                            <button type="button" aria-label="Insert link" data-format="link"><svg class="icon"><use href="#forum-link"></use></svg></button>
                        </div>
                    </div>
                    <label class="fp-visually-hidden" for="fp-body">Discussion details</label>
                    <textarea id="fp-body" name="body" rows="10" data-post-body><?= htmlspecialchars($formBody, ENT_QUOTES, 'UTF-8') ?></textarea>
                    <div class="fp-body-preview" data-body-preview hidden></div>
                    <div class="fp-editor-hint"><svg class="icon"><use href="#forum-info"></use></svg> Keep it technical, evidence-based, and respectful. Use SI units for all measurements.</div>
                </section>

                <section class="fp-panel fp-attachments" aria-labelledby="fp-attachments-title">
                    <div class="fp-section-heading">
                        <h2 id="fp-attachments-title"><svg class="icon"><use href="#forum-photo"></use></svg> ATTACHED TELEMETRY &amp; MACRO EVIDENCE (2/4 SLOTS)</h2>
                        <span>STRICT INTEGRITY ENFORCED</span>
                    </div>
                    <div class="fp-attachment-grid">
                        <div class="fp-attachment fp-photo-attachment">
                            <input id="fp-evidence-photo" type="file" name="evidence[]" accept="image/*" data-evidence-input="photo">
                            <label class="fp-attachment-content" for="fp-evidence-photo">
                                <img src="/assets/img/black-iron.jpg" alt="" data-evidence-image>
                                <span class="fp-file-details"><strong data-evidence-name>platform_04_macro_knurl.jpg</strong><small>2.4 MB &bull; INSPECTED / 20X</small></span>
                            </label>
                            <button type="button" aria-label="Remove macro evidence" data-remove-evidence="photo">&times;</button>
                        </div>
                        <div class="fp-attachment fp-data-attachment">
                            <input id="fp-evidence-data" type="file" name="evidence[]" accept=".csv,.json,.txt" data-evidence-input="data">
                            <label class="fp-attachment-content" for="fp-evidence-data">
                                <span class="fp-data-glyph"><svg class="icon"><use href="#forum-chart"></use></svg><b>CSV</b></span>
                                <span class="fp-file-details"><strong data-evidence-name>optijump_telemetry_275kg.csv</strong><small>148 KB &bull; 10.2 m/s<sup>2</sup></small></span>
                            </label>
                            <button type="button" aria-label="Remove telemetry evidence" data-remove-evidence="data">&times;</button>
                        </div>
                    </div>
                    <div class="fp-upload-actions">
                        <label class="fp-upload-link"><svg class="icon"><use href="#forum-camera"></use></svg> Attach Video (1080p 60fps for Form Checks)<input type="file" name="video" accept="video/*" data-video-input></label>
                        <a href="#telemetry-chart"><svg class="icon"><use href="#forum-chart"></use></svg> Link Sanctioned PR Telemetry</a>
                    </div>
                    <p class="fp-upload-note">Files are previewed locally only. Upload and evidence verification are not connected.</p>
                </section>

                <section class="fp-panel fp-chart-panel" id="telemetry-chart" aria-label="Bar velocity telemetry preview">
                    <div class="fp-chart-heading"><span><i></i> OPTIJUMP CONCENTRIC DISPLACEMENT PROFILE (290.0 KG)</span><small>T_ELAPSED: 1.32S</small></div>
                    <svg class="fp-velocity-chart" viewBox="0 0 800 72" role="img" aria-label="Bar velocity profile with a peak velocity of 0.41 meters per second">
                        <path d="M4 54 C70 53 89 52 125 51 S189 48 226 44 S276 26 320 24 S390 39 424 46 S480 53 530 50 S583 43 610 44 S670 56 700 53 S746 48 796 50" fill="none" stroke="#7bd0ff" stroke-width="2"/>
                        <path d="M4 54 C70 53 89 52 125 51 S189 48 226 44 S276 26 320 24 S390 39 424 46 S480 53 530 50 S583 43 610 44 S670 56 700 53 S746 48 796 50" fill="none" stroke="#7bd0ff" stroke-opacity=".14" stroke-width="10"/>
                        <circle cx="320" cy="24" r="4" fill="#c3f400" stroke="#0b1326" stroke-width="2"/>
                        <circle cx="610" cy="44" r="3" fill="#c3f400"/>
                    </svg>
                    <div class="fp-chart-labels"><span>START: 0.00 m/s</span><strong>STICKING POINT: 0.16 m/s @ 24.2s</strong><span>LOCKOUT: 0.34 m/s</span></div>
                </section>

                <section class="fp-panel fp-submit-panel" aria-label="Publishing options">
                    <label class="fp-check-row"><input type="checkbox" name="verified" value="1" checked><span><strong>Tag my verified lifter credentials</strong><b>PREVERIFIED</b><small>Marcus Vance &bull; Heavy class &bull; 93 kg &bull; TXP certified &bull; USAPL &bull; 817.5 kg Total</small></span></label>
                    <label class="fp-check-row"><input type="checkbox" name="notify" value="1" checked><span><strong>Notify me when verified spotters or field inspectors comment</strong><small>High-priority push routes for responses containing hardware audits or calibration logs.</small></span></label>
                    <div class="fp-submit-actions">
                        <button class="fp-secondary-button" type="submit" name="intent" value="save-draft"><svg class="icon"><use href="#forum-lock"></use></svg> Save Draft</button>
                        <a class="fp-discard-button" href="/forum">Discard Post</a>
                        <button class="fp-publish-button" type="submit" name="intent" value="publish">Publish to Locker Room <svg class="icon"><use href="#forum-send"></use></svg></button>
                    </div>
                </section>
            </form>

            <aside class="fp-sidebar" aria-label="Posting guidance and community activity">
                <section class="fp-panel fp-protocols">
                    <div class="fp-sidebar-heading"><h2><svg class="icon"><use href="#forum-shield"></use></svg> Protocols</h2><span>HIGH-SIGNAL ONLY</span></div>
                    <p>The Locker Room is an engineering-grade strength forum. Posts that do not meet rigorous technical standards are archived automatically.</p>
                    <ol>
                        <li><b>01</b><span><strong>Strictly Metric (kg/mm/m/s)</strong><small>Imperial approximations may be added in parenthesis, but all foundational weights, bar diameters, and speeds must be in metric units.</small></span></li>
                        <li><b>02</b><span><strong>Zero Fluff / Verifiable Claims</strong><small>Equipment reviews must specify steel PSI, sleeve friction, knurl pitch, or plate calibration deviation (target: &plusmn;10g).</small></span></li>
                        <li><b>03</b><span><strong>Form Checks Require Angles</strong><small>Low-bar squats and comp benches must include a 45-degree angle profile at hip/bench level with clear rack pin visibility.</small></span></li>
                    </ol>
                    <div class="fp-code-note"><svg class="icon"><use href="#forum-shield"></use></svg><strong>IPF RULEBOOK 2025 COMPLIANT</strong><a href="/forum">Full Codex &rarr;</a></div>
                </section>

                <section class="fp-panel fp-author-panel">
                    <div class="fp-sidebar-heading"><h2>Author Trust Reputation</h2><span><svg class="icon"><use href="#forum-shield"></use></svg> TIER II AUDITOR</span></div>
                    <div class="fp-author-card"><img src="/assets/img/marcus-vance.jpg" alt=""><span><strong>Marcus Vance</strong><small>Total Posts: 74 &bull; 24 Peer Audits</small></span><b>98.4%</b></div>
                    <p>Posts backed by verified barbell velocity telemetry receive 3x more visibility across global strength algorithms.</p>
                    <div class="fp-author-tip"><i></i>Calibration data will be cross-checked before your post enters the verified feed.</div>
                </section>

                <section class="fp-panel fp-debates">
                    <div class="fp-sidebar-heading"><h2><svg class="icon"><use href="#forum-chart"></use></svg> Active Debates</h2><span>LIVE FEED</span></div>
                    <article><span>CALIBRATION <b>142</b></span><h3>Eleiko Calibrated Steel vs Rogue Comp Plates: &plusmn;5g...</h3><small>Last ping 4m ago by @steve_squats</small></article>
                    <article><span>ROSTER INTEL <b>89</b></span><h3>Lone Star Autumn Open: -93kg Roster Discussion</h3><small>Last ping 18m ago by @texas_lift</small></article>
                    <article><span>EQUIPMENT <b>64</b></span><h3>SBD 13mm Lever vs Pioneer V2 Stitching durability</h3><small>Last ping 32m ago by @holloway</small></article>
                </section>
                <div class="fp-help-link"><a href="/forum">Need help exporting sensor data?</a><a href="/forum">Sensor Guide</a></div>
            </aside>
        </div>
    </div>
</main>

<?php
require __DIR__ . '/components/footer.html.php';
require __DIR__ . '/components/mobile-nav.html.php';
?>
