<?php

declare(strict_types=1);
?>
<article class="facility-card">
    <div class="facility-head">
        <div>
            <span class="facility-location <?= htmlspecialchars((string) ($capacity['locationClass'] ?? ''), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars((string) $capacity['location'], ENT_QUOTES, 'UTF-8') ?></span>
            <h3><?php foreach ($capacity['name'] as $lineIndex => $line): ?><?= $lineIndex > 0 ? '<br>' : '' ?><?= htmlspecialchars((string) $line, ENT_QUOTES, 'UTF-8') ?><?php endforeach; ?></h3>
        </div>
        <span class="tag <?= htmlspecialchars((string) $capacity['badgeClass'], ENT_QUOTES, 'UTF-8') ?>"><?php foreach ($capacity['badge'] as $lineIndex => $line): ?><?= $lineIndex > 0 ? '<br>' : '' ?><?= htmlspecialchars((string) $line, ENT_QUOTES, 'UTF-8') ?><?php endforeach; ?></span>
    </div>
    <div class="capacity">
        <div class="capacity-head"><span>CAPACITY INDEX</span><span class="<?= htmlspecialchars((string) $capacity['capacityClass'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars((string) $capacity['capacityLabel'], ENT_QUOTES, 'UTF-8') ?></span></div>
        <div class="capacity-track"><span class="capacity-fill <?= htmlspecialchars((string) $capacity['fillClass'], ENT_QUOTES, 'UTF-8') ?>" style="width: <?= (int) $capacity['fillWidth'] ?>%"></span></div>
    </div>
    <div class="equipment-grid">
        <?php foreach ($capacity['equipment'] as $equipment): ?>
            <div class="equipment-tile">
                <span class="tile-label"><?php if ($equipment['dot']): ?><span class="dot"></span><?php endif; ?><?= htmlspecialchars((string) $equipment['label'], ENT_QUOTES, 'UTF-8') ?></span>
                <strong class="<?= htmlspecialchars((string) ($equipment['valueClass'] ?? ''), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars((string) $equipment['value'], ENT_QUOTES, 'UTF-8') ?></strong>
                <span class="tile-note<?= $equipment['highlight'] ? ' text-lime' : '' ?>"><?= htmlspecialchars((string) $equipment['note'], ENT_QUOTES, 'UTF-8') ?></span>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="facility-foot">
        <span class="auditor"><svg class="icon <?= htmlspecialchars((string) ($capacity['auditorClass'] ?? 'icon-lime'), ENT_QUOTES, 'UTF-8') ?>"><use href="#i-check"></use></svg>By <?= htmlspecialchars((string) $capacity['auditor'], ENT_QUOTES, 'UTF-8') ?></span>
        <a class="mini-button <?= htmlspecialchars((string) $capacity['buttonClass'], ENT_QUOTES, 'UTF-8') ?>" href="#reviews"><?= htmlspecialchars((string) $capacity['button'], ENT_QUOTES, 'UTF-8') ?></a>
    </div>
</article>
