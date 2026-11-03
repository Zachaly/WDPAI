<?php

declare(strict_types=1);
?>
<header class="<?= htmlspecialchars((string) $mobileHeaderComponent['headerClass'], ENT_QUOTES, 'UTF-8') ?>">
    <a class="<?= htmlspecialchars((string) $mobileHeaderComponent['brandClass'], ENT_QUOTES, 'UTF-8') ?>" href="/" aria-label="IronPulse home">
        <svg class="icon"><use href="#<?= htmlspecialchars((string) $iconPrefix, ENT_QUOTES, 'UTF-8') ?>-dumbbell"></use></svg>
        <span>IRON<span>PULSE</span></span>
    </a>
    <span class="<?= htmlspecialchars((string) $mobileHeaderComponent['liveClass'], ENT_QUOTES, 'UTF-8') ?>"><i></i> LIVE</span>
    <a class="avatar-button" href="/#profile" aria-label="Your profile"><svg class="icon"><use href="#<?= htmlspecialchars((string) $iconPrefix, ENT_QUOTES, 'UTF-8') ?>-user"></use></svg></a>
</header>
