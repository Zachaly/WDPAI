<?php

declare(strict_types=1);
?>
<header class="<?= htmlspecialchars((string) $desktopHeaderComponent['class'], ENT_QUOTES, 'UTF-8') ?>">
    <div class="container header-inner">
        <a class="brand" href="/" aria-label="IronPulse home">
            <span class="brand-mark"><svg class="icon"><use href="#<?= htmlspecialchars((string) $iconPrefix, ENT_QUOTES, 'UTF-8') ?>-dumbbell"></use></svg></span>
            <span class="brand-text"><strong>IRONPULSE</strong><small>TELEMETRY &amp; COMMUNITY</small></span>
        </a>
        <div class="header-status" aria-hidden="true"><svg class="icon"><use href="#<?= htmlspecialchars((string) $iconPrefix, ENT_QUOTES, 'UTF-8') ?>-bars"></use></svg></div>
        <nav class="<?= htmlspecialchars((string) $desktopHeaderComponent['navigationClass'], ENT_QUOTES, 'UTF-8') ?>" aria-label="Primary">
            <a href="/#reviews">Gym<?= $desktopHeaderComponent['singleLineNavigation'] ? ' ' : '<br>' ?>Reviews</a>
            <a href="/gear"<?= $desktopHeaderComponent['activePage'] === 'gear' ? ' class="is-active" aria-current="page"' : '' ?>>Gear<?= $desktopHeaderComponent['singleLineNavigation'] ? ' ' : '<br>' ?>Inventory</a>
            <a href="/forum"<?= $desktopHeaderComponent['activePage'] === 'forum' ? ' class="is-active" aria-current="page"' : '' ?>>Community<?= $desktopHeaderComponent['singleLineNavigation'] ? ' ' : '<br>' ?>Forum</a>
            <a href="/leaderboard"<?= $desktopHeaderComponent['activePage'] === 'leaderboard' ? ' class="is-active" aria-current="page"' : '' ?>>Leaderboard</a>
            <a href="/submit-gym"<?= $desktopHeaderComponent['activePage'] === 'submit-gym' ? ' class="is-active" aria-current="page"' : '' ?>>Submit<?= $desktopHeaderComponent['singleLineNavigation'] ? ' ' : '<br>' ?>Gym</a>
        </nav>
        <div class="header-actions">
            <a class="icon-button" href="<?= htmlspecialchars((string) $desktopHeaderComponent['searchHref'], ENT_QUOTES, 'UTF-8') ?>" aria-label="<?= htmlspecialchars((string) $desktopHeaderComponent['searchLabel'], ENT_QUOTES, 'UTF-8') ?>"><svg class="icon"><use href="#<?= htmlspecialchars((string) $iconPrefix, ENT_QUOTES, 'UTF-8') ?>-search"></use></svg></a>
            <a class="avatar-button" href="/#profile" aria-label="Your profile"><svg class="icon"><use href="#<?= htmlspecialchars((string) $iconPrefix, ENT_QUOTES, 'UTF-8') ?>-user"></use></svg></a>
        </div>
    </div>
</header>
