<?php

declare(strict_types=1);
?>
<li><b><?= htmlspecialchars((string) $spotter['rank'], ENT_QUOTES, 'UTF-8') ?></b><span class="karma-name"><strong><?= htmlspecialchars((string) $spotter['name'], ENT_QUOTES, 'UTF-8') ?> <svg class="icon"><use href="#<?= htmlspecialchars((string) $spotter['icon'], ENT_QUOTES, 'UTF-8') ?>"></use></svg></strong><small><?= htmlspecialchars((string) $spotter['activity'], ENT_QUOTES, 'UTF-8') ?></small></span><strong><?= htmlspecialchars((string) $spotter['points'], ENT_QUOTES, 'UTF-8') ?> <small>PTS</small></strong></li>
