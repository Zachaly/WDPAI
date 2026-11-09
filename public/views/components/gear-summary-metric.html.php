<?php

declare(strict_types=1);
?>
<article class="summary-metric<?= !empty($metric['accuracy']) ? ' summary-accuracy' : '' ?>">
    <span class="summary-label"><?= htmlspecialchars((string) $metric['label'], ENT_QUOTES, 'UTF-8') ?></span>
    <strong><?= htmlspecialchars((string) $metric['value'], ENT_QUOTES, 'UTF-8') ?><?php if (!empty($metric['unit'])): ?> <small><?= htmlspecialchars((string) $metric['unit'], ENT_QUOTES, 'UTF-8') ?></small><?php endif; ?></strong>
    <small><?= htmlspecialchars((string) $metric['note'], ENT_QUOTES, 'UTF-8') ?></small>
    <svg class="icon metric-mark"><use href="#<?= htmlspecialchars((string) $metric['icon'], ENT_QUOTES, 'UTF-8') ?>"></use></svg>
</article>
