<?php

declare(strict_types=1);
?>
<li><b>#<?= htmlspecialchars((string) $sanctuary['rank'], ENT_QUOTES, 'UTF-8') ?></b><span><strong><?= htmlspecialchars((string) $sanctuary['name'], ENT_QUOTES, 'UTF-8') ?><?php if ($sanctuary['verified']): ?> <svg class="icon"><use href="#lb-shield"></use></svg><?php endif; ?></strong><small><?= htmlspecialchars((string) $sanctuary['details'], ENT_QUOTES, 'UTF-8') ?></small></span><span class="sanctuary-score"><strong><?= htmlspecialchars((string) $sanctuary['score'], ENT_QUOTES, 'UTF-8') ?></strong><small><?= htmlspecialchars((string) $sanctuary['reviews'], ENT_QUOTES, 'UTF-8') ?> REVIEWS</small></span></li>
