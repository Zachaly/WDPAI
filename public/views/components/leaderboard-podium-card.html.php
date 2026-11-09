<?php

declare(strict_types=1);
?>
<article class="podium-card <?= htmlspecialchars((string) $podium['class'], ENT_QUOTES, 'UTF-8') ?>">
    <div class="podium-card-label"><strong><?= htmlspecialchars((string) $podium['rank'], ENT_QUOTES, 'UTF-8') ?></strong><span><?= htmlspecialchars((string) $podium['label'], ENT_QUOTES, 'UTF-8') ?></span><b><?= htmlspecialchars((string) $podium['division'], ENT_QUOTES, 'UTF-8') ?></b></div>
    <div class="podium-athlete">
        <img src="<?= htmlspecialchars((string) $podium['image'], ENT_QUOTES, 'UTF-8') ?>" alt="">
        <div><h3><?= htmlspecialchars((string) $podium['name'], ENT_QUOTES, 'UTF-8') ?> <svg class="icon"><use href="#lb-shield"></use></svg></h3><span><?= htmlspecialchars((string) $podium['handle'], ENT_QUOTES, 'UTF-8') ?> &bull; <?= htmlspecialchars((string) $podium['location'], ENT_QUOTES, 'UTF-8') ?></span><b><?= htmlspecialchars((string) $podium['credential'], ENT_QUOTES, 'UTF-8') ?></b></div>
    </div>
    <div class="podium-lifts">
        <?php foreach ($podium['lifts'] as $lift): ?>
            <div><span><?= htmlspecialchars((string) $lift['name'], ENT_QUOTES, 'UTF-8') ?></span><strong><?= htmlspecialchars((string) $lift['value'], ENT_QUOTES, 'UTF-8') ?> <small>kg</small><?php if (!empty($lift['velocity'])): ?><i><?= htmlspecialchars((string) $lift['velocity'], ENT_QUOTES, 'UTF-8') ?></i><?php endif; ?></strong></div>
        <?php endforeach; ?>
    </div>
    <div class="podium-total">
        <span><?= htmlspecialchars((string) $podium['totalLabel'], ENT_QUOTES, 'UTF-8') ?><strong><?= htmlspecialchars((string) $podium['total'], ENT_QUOTES, 'UTF-8') ?> <small>KG</small></strong><?php if (!empty($podium['totalNote'])): ?><small><?= htmlspecialchars((string) $podium['totalNote'], ENT_QUOTES, 'UTF-8') ?></small><?php endif; ?></span>
        <span><?= htmlspecialchars((string) $podium['scoreLabel'], ENT_QUOTES, 'UTF-8') ?><strong><?= htmlspecialchars((string) $podium['score'], ENT_QUOTES, 'UTF-8') ?></strong><?php if (!empty($podium['scoreNote'])): ?><small><?= htmlspecialchars((string) $podium['scoreNote'], ENT_QUOTES, 'UTF-8') ?></small><?php endif; ?></span>
    </div>
</article>
