<?php

declare(strict_types=1);
?>
<tr<?= !empty($athlete['first']) ? ' class="standings-first"' : '' ?>>
    <td><strong><?= htmlspecialchars((string) $athlete['rank'], ENT_QUOTES, 'UTF-8') ?></strong><i><?= htmlspecialchars((string) $athlete['movement'], ENT_QUOTES, 'UTF-8') ?></i></td>
    <td><span class="lifters-initial"><?= htmlspecialchars((string) $athlete['initials'], ENT_QUOTES, 'UTF-8') ?></span><span class="lifter-label"><strong><?= htmlspecialchars((string) $athlete['name'], ENT_QUOTES, 'UTF-8') ?> <svg class="icon"><use href="#lb-shield"></use></svg></strong><small><?= htmlspecialchars((string) $athlete['handle'], ENT_QUOTES, 'UTF-8') ?> &bull; <?= htmlspecialchars((string) $athlete['gym'], ENT_QUOTES, 'UTF-8') ?></small></span></td>
    <td><?= htmlspecialchars((string) $athlete['division'], ENT_QUOTES, 'UTF-8') ?></td>
    <td><?= htmlspecialchars((string) $athlete['squat'], ENT_QUOTES, 'UTF-8') ?> <small>kg</small></td>
    <td><?= htmlspecialchars((string) $athlete['bench'], ENT_QUOTES, 'UTF-8') ?> <small>kg</small></td>
    <td><?= htmlspecialchars((string) $athlete['deadlift'], ENT_QUOTES, 'UTF-8') ?> <small>kg</small></td>
    <td><strong><?= htmlspecialchars((string) $athlete['total'], ENT_QUOTES, 'UTF-8') ?></strong></td>
    <td><strong><?= htmlspecialchars((string) $athlete['dots'], ENT_QUOTES, 'UTF-8') ?></strong></td>
    <td><?= htmlspecialchars((string) $athlete['meet'], ENT_QUOTES, 'UTF-8') ?><small><?= htmlspecialchars((string) $athlete['location'], ENT_QUOTES, 'UTF-8') ?></small></td>
    <td><svg class="icon"><use href="#lb-video"></use></svg></td>
</tr>
