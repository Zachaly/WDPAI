<?php

declare(strict_types=1);
?>
<header class="<?= htmlspecialchars((string) $mobileHeaderComponent['headerClass'], ENT_QUOTES, 'UTF-8') ?>">
    <a class="<?= htmlspecialchars((string) $mobileHeaderComponent['brandClass'], ENT_QUOTES, 'UTF-8') ?>" href="/" aria-label="IronPulse home">
        <svg class="icon"><use href="#<?= htmlspecialchars((string) $iconPrefix, ENT_QUOTES, 'UTF-8') ?>-dumbbell"></use></svg>
        <span>IRON<span>PULSE</span></span>
    </a>
    <span class="<?= htmlspecialchars((string) $mobileHeaderComponent['liveClass'], ENT_QUOTES, 'UTF-8') ?>"><i></i> LIVE</span>
    <button class="theme-toggle" type="button" data-theme-toggle aria-label="Switch to light theme" title="Switch to light theme" aria-pressed="false">
        <svg class="icon theme-icon-light" aria-hidden="true" viewBox="0 0 24 24"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2m0 16v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42"></path></svg>
        <svg class="icon theme-icon-dark" aria-hidden="true" viewBox="0 0 24 24"><path d="M20.5 15.5A8.5 8.5 0 0 1 8.5 3.5 8.5 8.5 0 1 0 20.5 15.5Z"></path></svg>
        <span class="theme-toggle-label" data-theme-toggle-label>Light</span>
    </button>
    <a class="avatar-button" href="/profile" aria-label="Your profile"><svg class="icon"><use href="#<?= htmlspecialchars((string) $iconPrefix, ENT_QUOTES, 'UTF-8') ?>-user"></use></svg></a>
</header>
