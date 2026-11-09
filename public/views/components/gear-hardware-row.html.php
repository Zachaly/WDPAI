<?php

declare(strict_types=1);
?>
<tr>
    <td><span class="hardware-symbol <?= htmlspecialchars((string) $item['symbol'], ENT_QUOTES, 'UTF-8') ?>"><svg class="icon"><use href="#<?= htmlspecialchars((string) $item['icon'], ENT_QUOTES, 'UTF-8') ?>"></use></svg></span><strong><?= htmlspecialchars((string) $item['name'], ENT_QUOTES, 'UTF-8') ?><small><?= htmlspecialchars((string) $item['detail'], ENT_QUOTES, 'UTF-8') ?></small></strong></td>
    <td><?php foreach ($item['manufacturer'] as $index => $line): ?><?= $index > 0 ? '<br>' : '' ?><?= htmlspecialchars((string) $line, ENT_QUOTES, 'UTF-8') ?><?php endforeach; ?></td>
    <td><?php foreach ($item['specification'] as $index => $line): ?><?= $index > 0 ? '<br>' : '' ?><?= htmlspecialchars((string) $line, ENT_QUOTES, 'UTF-8') ?><?php endforeach; ?></td>
    <td><strong class="<?= htmlspecialchars((string) $item['ratingClass'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars((string) $item['rating'], ENT_QUOTES, 'UTF-8') ?><?php if ($item['ratingDetail'] !== ''): ?><br><?= htmlspecialchars((string) $item['ratingDetail'], ENT_QUOTES, 'UTF-8') ?><?php endif; ?></strong><span><?php foreach ($item['note'] as $index => $line): ?><?= $index > 0 ? '<br>' : '' ?><?= htmlspecialchars((string) $line, ENT_QUOTES, 'UTF-8') ?><?php endforeach; ?></span></td>
    <td><strong><?= htmlspecialchars((string) $item['facilities'], ENT_QUOTES, 'UTF-8') ?></strong><small>Gyms verified</small></td>
    <td><strong class="audit-pass">VERIFIED<br>SPEC</strong></td>
</tr>
