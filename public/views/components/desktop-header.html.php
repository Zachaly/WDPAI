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
            <button class="theme-toggle" type="button" data-theme-toggle aria-label="Switch to light theme" title="Switch to light theme" aria-pressed="false">
                <svg class="icon theme-icon-light" aria-hidden="true" viewBox="0 0 24 24"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2m0 16v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42"></path></svg>
                <svg class="icon theme-icon-dark" aria-hidden="true" viewBox="0 0 24 24"><path d="M20.5 15.5A8.5 8.5 0 0 1 8.5 3.5 8.5 8.5 0 1 0 20.5 15.5Z"></path></svg>
                <span class="theme-toggle-label" data-theme-toggle-label>Light</span>
            </button>
            <a class="icon-button" href="<?= htmlspecialchars((string) $desktopHeaderComponent['searchHref'], ENT_QUOTES, 'UTF-8') ?>" aria-label="<?= htmlspecialchars((string) $desktopHeaderComponent['searchLabel'], ENT_QUOTES, 'UTF-8') ?>"><svg class="icon"><use href="#<?= htmlspecialchars((string) $iconPrefix, ENT_QUOTES, 'UTF-8') ?>-search"></use></svg></a>
            <?php if ($isAuthenticated): ?>
                <a class="avatar-button" href="/profile" aria-label="Your profile"><svg class="icon"><use href="#<?= htmlspecialchars((string) $iconPrefix, ENT_QUOTES, 'UTF-8') ?>-user"></use></svg></a>
                <form class="nav-logout-form" action="/logout" method="post">
                    <input type="hidden" name="csrfToken" value="<?= htmlspecialchars((string) $csrfToken, ENT_QUOTES, 'UTF-8') ?>">
                    <button class="nav-auth-link" type="submit">Sign out</button>
                </form>
            <?php else: ?>
                <div class="nav-auth-links">
                    <a class="nav-auth-link" href="/login">Sign in</a>
                    <a class="nav-auth-link nav-auth-link-primary" href="/register">Sign up</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>
