<?php

declare(strict_types=1);
?>
<main class="login-shell">
    <div class="login-layout">
        <section class="login-dashboard" aria-labelledby="login-brand-title">
            <header class="login-brand">
                <p class="login-node-status"><i aria-hidden="true"></i>NODE CLUSTER 09 // ONLINE</p>
                <h1 id="login-brand-title">ZERO FLUFF.<br><span>CALIBRATED</span><br>STEEL.</h1>
                <p class="login-brand-description">The decentralized cryptographic portal for sanctioned powerlifting gyms, precision calibrated bars, and peer-verified heavy iron facilities.</p>
            </header>

            <section class="login-telemetry" aria-label="IronPulse network statistics">
                <article class="login-metric">
                    <div class="login-metric-heading">
                        <h2>SANCTUARIES</h2>
                        <img src="/assets/icons/login-sanctuary.svg" alt="" aria-hidden="true">
                    </div>
                    <strong>142</strong>
                    <p><i class="login-blue-dot" aria-hidden="true"></i>Verified Armories</p>
                </article>
                <article class="login-metric">
                    <div class="login-metric-heading">
                        <h2>LIFTERS</h2>
                        <img src="/assets/icons/login-lifters.svg" alt="" aria-hidden="true">
                    </div>
                    <strong>18.4K</strong>
                    <p><i aria-hidden="true"></i>Audited Profiles</p>
                </article>
                <article class="login-compliance">
                    <div class="login-compliance-heading">
                        <div><img src="/assets/icons/login-compliance.svg" alt="" aria-hidden="true"><h2>IPF / USAPL SPEC COMPLIANCE</h2></div>
                        <span>99.98% ACCURACY</span>
                    </div>
                    <img class="login-chart" src="/assets/icons/login-telemetry.svg" alt="Recent calibrated barbell load readings">
                    <div class="login-load">
                        <span>LIVE LOAD: 42.1 TONS CURRENTLY ON BARBELLS</span>
                        <span>14ms HEARTBEAT</span>
                    </div>
                </article>
            </section>

            <article class="login-audit-card" aria-label="Latest verified armory audit">
                <header>
                    <span class="login-audit-icon"><img src="/assets/icons/login-shield.svg" alt="" aria-hidden="true"></span>
                    <div>
                        <h2>Black Iron Compound #04</h2>
                        <p>Austin, TX &bull; Verified Heavy Bastion</p>
                    </div>
                </header>
                <blockquote>“Eleiko competition rack #02 recalibrated. 24 calibrated plates inspected at 0.01g tolerance. Chalk levels replenished.”</blockquote>
                <footer><span>AUDITOR: #TX-9021</span><span>3 MINS AGO</span></footer>
            </article>

            <figure class="login-photo-strip">
                <img src="/assets/img/login-armory.jpg" alt="" aria-hidden="true">
                <figcaption>
                    <span>SANCTIONED TELEMETRY STREAM</span>
                    <span><img src="/assets/icons/login-feed.svg" alt="" aria-hidden="true">FEED ACTIVE</span>
                </figcaption>
            </figure>
        </section>

        <section class="login-terminal-wrap" aria-labelledby="login-terminal-title">
            <div class="login-terminal">
                <header class="login-terminal-header">
                    <div class="login-terminal-heading">
                        <p class="login-terminal-kicker"><span>GATEWAY TERMINAL // 01</span><i aria-hidden="true">&bull;</i><b>256-BIT ENCRYPTED</b></p>
                        <h2 id="login-terminal-title">ATHLETE ACCESS // TERMINALS</h2>
                        <p>Authenticate your lifter profile or auditor credentials.</p>
                    </div>
                    <p class="login-revision"><span>SYSTEM REVISION</span><strong>v4.18.2-SEC</strong></p>
                </header>

                <form class="login-form" action="/login" method="post" data-login-form>
                    <div class="login-field">
                        <div class="login-field-label">
                            <label for="login-identifier">ATHLETE HANDLE OR VERIFIED EMAIL</label>
                            <span>USAPL / IPF / DOMAIN</span>
                        </div>
                        <div class="login-input-wrap">
                            <img src="/assets/icons/login-athlete.svg" alt="" aria-hidden="true">
                            <input id="login-identifier" name="identifier" type="text" autocomplete="username" placeholder="e.g. haack@ironpulse.io or #USAPL-44918" required>
                        </div>
                    </div>

                    <div class="login-field">
                        <div class="login-field-label">
                            <label for="login-password">PASSWORD / PASSPHRASE</label>
                            <button class="login-forgot" type="button" data-forgot-password>Forgot Password?</button>
                        </div>
                        <div class="login-input-wrap">
                            <img src="/assets/icons/login-key.svg" alt="" aria-hidden="true">
                            <input id="login-password" name="password" type="password" autocomplete="current-password" placeholder="••••••••••••••••••••••••" required>
                            <button class="login-password-toggle" type="button" aria-label="Show password" aria-pressed="false" data-password-toggle>
                                <img src="/assets/icons/login-eye.svg" alt="" aria-hidden="true">
                            </button>
                        </div>
                    </div>

                    <div class="login-options">
                        <label class="login-remember">
                            <input type="checkbox" name="remember" value="1" checked>
                            <span>Remember this audited terminal for 30 days</span>
                        </label>
                        <span class="login-tpm"><i aria-hidden="true"></i>TPM ATTESTED</span>
                    </div>

                    <button class="login-submit" type="submit">
                        <span>AUTHENTICATE &amp; ENTER ARMORY</span>
                        <img src="/assets/icons/login-arrow.svg" alt="" aria-hidden="true">
                    </button>

                    <p class="login-notice" role="status" aria-live="polite" data-login-notice<?= isset($loginMessage) ? '' : ' hidden' ?>><?= htmlspecialchars((string) ($loginMessage ?? ''), ENT_QUOTES, 'UTF-8') ?></p>
                </form>

                <footer class="login-terminal-footer">
                    <p class="login-signed-badge">
                        <img src="/assets/icons/login-lock.svg" alt="" aria-hidden="true">
                        <span>256-BIT SIGNED &bull; NODE: US-CENTRAL-1 &bull;<br>ZERO FLUFF</span>
                    </p>
                    <div class="login-register-link">
                        <p>Unregistered<br>lifter?</p>
                        <a href="/register">Request Auditor<br>Verification</a>
                    </div>
                </footer>
            </div>
        </section>
    </div>
</main>
<script src="/js/login.js" defer></script>
