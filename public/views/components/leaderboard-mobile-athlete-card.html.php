<?php

declare(strict_types=1);
?>
<article class="mobile-athlete-card<?= !empty($athlete['first']) ? ' mobile-athlete-first' : '' ?>">
    <span class="mobile-athlete-rank">#<?= htmlspecialchars((string) $athlete['rank'], ENT_QUOTES, 'UTF-8') ?></span>
    <?php if (!empty($athlete['image'])): ?><img src="<?= htmlspecialchars((string) $athlete['image'], ENT_QUOTES, 'UTF-8') ?>" alt=""><?php else: ?><span class="mobile-initial"><?= htmlspecialchars((string) $athlete['initials'], ENT_QUOTES, 'UTF-8') ?></span><?php endif; ?>
    <div><strong><?= htmlspecialchars((string) $athlete['name'], ENT_QUOTES, 'UTF-8') ?> <svg class="icon"><use href="#lb-shield"></use></svg></strong><small><?= htmlspecialchars((string) $athlete['handle'], ENT_QUOTES, 'UTF-8') ?> &bull; <?= htmlspecialchars((string) $athlete['division'], ENT_QUOTES, 'UTF-8') ?></small></div>
    <b><?= htmlspecialchars((string) $athlete['total'], ENT_QUOTES, 'UTF-8') ?> <small>KG</small></b>
    <span class="mobile-athlete-dots"><?= htmlspecialchars((string) $athlete['dots'], ENT_QUOTES, 'UTF-8') ?> DOTS</span>
    <div class="mobile-athlete-lifts">
        <?php foreach (['SQUAT', 'BENCH', 'DEADLIFT'] as $index => $liftName): ?>
            <span><small><?= $liftName ?></small><?= htmlspecialchars((string) $athlete['lifts'][$index], ENT_QUOTES, 'UTF-8') ?>kg</span>
        <?php endforeach; ?>
    </div>
</article>
