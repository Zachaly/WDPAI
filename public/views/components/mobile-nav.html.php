<?php

declare(strict_types=1);
?>
<nav class="<?= htmlspecialchars((string) $mobileNavComponent['class'], ENT_QUOTES, 'UTF-8') ?>" aria-label="Mobile">
    <?php foreach ($mobileNavComponent['items'] as $item): ?>
        <a href="<?= htmlspecialchars((string) $item['href'], ENT_QUOTES, 'UTF-8') ?>"<?= $item['page'] === $mobileNavComponent['activePage'] ? ' class="is-active" aria-current="page"' : '' ?>>
            <svg class="icon"><use href="#<?= htmlspecialchars((string) $iconPrefix, ENT_QUOTES, 'UTF-8') ?>-<?= htmlspecialchars((string) $item['icon'], ENT_QUOTES, 'UTF-8') ?>"></use></svg>
            <span><?= htmlspecialchars((string) $item['label'], ENT_QUOTES, 'UTF-8') ?></span>
        </a>
    <?php endforeach; ?>
</nav>
