<?php

declare(strict_types=1);
?>
<main class="registration-shell">
    <div class="registration-layout">
        <section class="registration-intro" aria-labelledby="registration-brand-title">
            <div class="registration-intro-content">
                <span class="registration-badge"><i aria-hidden="true"></i>ZERO FLUFF // 100% CALIBRATED IRON</span>

                <div class="registration-brand-copy">
                    <span class="registration-eyebrow">GATEWAY PROTOCOL V4.1</span>
                    <h1 id="registration-brand-title">IRONPULSE ATHLETE<br>REGISTRY</h1>
                    <p>Precision sanctuary network for sanctioned powerlifters, metric purists, and strength specialists. Calibrated iron, verifiable telemetry, zero compromises.</p>
                </div>

                <figure class="registration-photo">
                    <img src="/assets/img/registration-athlete.jpg" alt="Athlete deadlifting at a strength training facility">
                    <figcaption>
                        <strong>WARSAW SANCTIONED FACILITY // PLATFORM 04</strong>
                        <span>ACTIVE LOG</span>
                    </figcaption>
                </figure>

                <ul class="registration-benefits" aria-label="IronPulse community benefits">
                    <li>
                        <img src="/assets/icons/register-users.svg" alt="" aria-hidden="true">
                        <div>
                            <h2>Join 18.4K verified lifters</h2>
                            <p>Validated IPF, USAPL, and WRPF competitive profiles across 38 global regions.</p>
                        </div>
                    </li>
                    <li>
                        <img src="/assets/icons/register-barbell.svg" alt="" aria-hidden="true">
                        <div>
                            <h2>Sanctioned manifests &amp; knurling telemetry</h2>
                            <p>Verified rack inventories, Eleiko &amp; Rogue bar specs, and aggressive grip scoring.</p>
                        </div>
                    </li>
                    <li>
                        <img src="/assets/icons/register-telemetry.svg" alt="" aria-hidden="true">
                        <div>
                            <h2>Calibrated kilo tracking &amp; prep forums</h2>
                            <p>Real-time attempt weight calculations, peak block analysis, and verified lifter discussions.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="registration-metrics">
                <div>
                    <span>NETWORK PEAK LOAD</span>
                    <p><strong>4,812</strong><small>LOGS TODAY</small></p>
                </div>
                <div>
                    <span>MIN SPEC TOLERANCE</span>
                    <strong class="registration-calibration">±10g CALIBRATION</strong>
                </div>
            </div>
        </section>

        <section class="registration-form-panel" aria-labelledby="registration-form-title">
            <div class="registration-form-content">
                <header class="registration-form-header">
                    <div class="registration-form-meta">
                        <span>IDENTITY ONBOARDING</span>
                        <span>STEP 01 OF 01</span>
                    </div>
                    <h2 id="registration-form-title">Athlete Registration Portal</h2>
                    <p>Input personal verified telemetry to generate your public strength index and forum credential.</p>
                </header>

                <form class="registration-form" action="/register" method="post" data-registration-form>
                    <input type="hidden" name="csrfToken" value="<?= htmlspecialchars((string) ($csrfToken ?? ''), ENT_QUOTES, 'UTF-8') ?>">

                    <?php if (($errors ?? []) !== []): ?>
                        <div class="registration-errors" role="alert">
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li><?= htmlspecialchars((string) $error, ENT_QUOTES, 'UTF-8') ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <div class="registration-fields-row">
                        <div class="registration-field">
                            <label for="first-name">FIRST NAME <span aria-hidden="true">*</span></label>
                            <input id="first-name" name="first_name" type="text" autocomplete="given-name" placeholder="Marcus" maxlength="100" value="<?= htmlspecialchars((string) ($formValues['first_name'] ?? ''), ENT_QUOTES, 'UTF-8') ?>" required>
                        </div>
                        <div class="registration-field">
                            <label for="last-name">LAST NAME <span aria-hidden="true">*</span></label>
                            <input id="last-name" name="last_name" type="text" autocomplete="family-name" placeholder="Vance" maxlength="100" value="<?= htmlspecialchars((string) ($formValues['last_name'] ?? ''), ENT_QUOTES, 'UTF-8') ?>" required>
                        </div>
                    </div>

                    <div class="registration-field">
                        <label for="lifter-handle">NICKNAME / LIFTER HANDLE <span aria-hidden="true">*</span></label>
                        <div class="registration-input-wrap registration-handle">
                            <span aria-hidden="true">@</span>
                            <input id="lifter-handle" name="handle" type="text" autocomplete="username" placeholder="bench_beast93" minlength="3" maxlength="30" pattern="[A-Za-z0-9_]{3,30}" value="<?= htmlspecialchars((string) ($formValues['handle'] ?? ''), ENT_QUOTES, 'UTF-8') ?>" required>
                        </div>
                        <p class="registration-helper">Unique public identifier across leaderboards &amp; forum</p>
                    </div>

                    <div class="registration-field">
                        <label for="email-address">EMAIL ADDRESS <span aria-hidden="true">*</span></label>
                        <div class="registration-input-wrap">
                            <input id="email-address" name="email" type="email" autocomplete="email" placeholder="athlete@ironpulse.io" maxlength="255" value="<?= htmlspecialchars((string) ($formValues['email'] ?? ''), ENT_QUOTES, 'UTF-8') ?>" required>
                            <img class="registration-email-icon" src="/assets/icons/register-email.svg" alt="" aria-hidden="true">
                        </div>
                    </div>

                    <div class="registration-fields-row">
                        <div class="registration-field">
                            <label for="registration-password">PASSWORD <span aria-hidden="true">*</span></label>
                            <div class="registration-input-wrap">
                                <input id="registration-password" name="password" type="password" autocomplete="new-password" placeholder="••••••••••••" minlength="8" maxlength="72" required data-password>
                                <button class="registration-password-toggle" type="button" aria-label="Show password" aria-pressed="false" data-password-toggle>
                                    <img src="/assets/icons/register-eye.svg" alt="" aria-hidden="true">
                                </button>
                            </div>
                        </div>
                        <div class="registration-field">
                            <label for="confirm-password">CONFIRM PASSWORD <span aria-hidden="true">*</span></label>
                            <div class="registration-input-wrap">
                                <input id="confirm-password" name="password_confirmation" type="password" autocomplete="new-password" placeholder="••••••••••••" required data-password-confirmation>
                                <button class="registration-password-toggle" type="button" aria-label="Show confirm password" aria-pressed="false" data-password-toggle>
                                    <img src="/assets/icons/register-eye.svg" alt="" aria-hidden="true">
                                </button>
                            </div>
                        </div>
                    </div>

                    <section class="registration-telemetry" aria-label="Password requirements">
                        <div class="registration-telemetry-header">
                            <h3>SECURITY TELEMETRY</h3>
                            <span data-password-status>AWAITING INPUT</span>
                        </div>
                        <div class="registration-strength" role="progressbar" aria-label="Password strength" aria-valuemin="0" aria-valuemax="4" aria-valuenow="0" data-password-strength>
                            <span></span><span></span><span></span><span></span>
                        </div>
                        <ul class="registration-rules">
                            <li data-password-rule="length"><img src="/assets/icons/register-rule.svg" alt="" aria-hidden="true"><span>8+ chars</span></li>
                            <li data-password-rule="number"><img src="/assets/icons/register-rule.svg" alt="" aria-hidden="true"><span>Number</span></li>
                            <li data-password-rule="special"><img src="/assets/icons/register-rule.svg" alt="" aria-hidden="true"><span>Special char</span></li>
                            <li class="registration-match" data-password-rule="match"><img src="/assets/icons/register-password-match.svg" alt="" aria-hidden="true"><span>Passwords match</span></li>
                        </ul>
                    </section>

                    <label class="registration-consent">
                        <input type="checkbox" name="terms" value="1"<?= !empty($termsAccepted) ? ' checked' : '' ?> required>
                        <span>I agree to the <span class="registration-terms-link">Lifter Code of Conduct</span> &amp; <span class="registration-terms-link">IPF/Sanctioned Gym Verification Terms</span>. I certify all logged attempt kilograms reflect certified calibrator standards.</span>
                    </label>

                    <div class="registration-actions">
                        <button class="registration-submit" type="submit">
                            <span>CREATE ATHLETE PROFILE</span>
                            <img src="/assets/icons/register-arrow.svg" alt="" aria-hidden="true">
                        </button>
                        <p class="registration-notice" role="status" aria-live="polite"<?= isset($registrationMessage) ? '' : ' hidden' ?>><?= htmlspecialchars((string) ($registrationMessage ?? ''), ENT_QUOTES, 'UTF-8') ?></p>
                        <p class="registration-signin">Already registered? <a href="/login">Sign In to Armory <span aria-hidden="true">→</span></a></p>
                    </div>
                </form>
            </div>
        </section>
    </div>
</main>
<script src="/js/register.js" defer></script>
