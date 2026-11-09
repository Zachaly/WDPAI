<?php

declare(strict_types=1);
?>
<article class="manifest-card">
    <div class="manifest-image <?= htmlspecialchars((string) $manifest['imageClass'], ENT_QUOTES, 'UTF-8') ?>" style="background-image:url('<?= htmlspecialchars((string) $manifest['image'], ENT_QUOTES, 'UTF-8') ?>')">
        <span class="manifest-score"><svg class="icon"><use href="#gear-shield"></use></svg><?= htmlspecialchars((string) $manifest['score'], ENT_QUOTES, 'UTF-8') ?> VERIFIED</span>
    </div>
    <div class="manifest-content">
        <div class="manifest-title"><div><h3><?= htmlspecialchars((string) $manifest['name'], ENT_QUOTES, 'UTF-8') ?></h3><span><svg class="icon"><use href="#gear-pin"></use></svg><?= htmlspecialchars((string) $manifest['location'], ENT_QUOTES, 'UTF-8') ?> &bull; <?= htmlspecialchars((string) $manifest['area'], ENT_QUOTES, 'UTF-8') ?></span></div><strong><?= htmlspecialchars((string) $manifest['score'], ENT_QUOTES, 'UTF-8') ?></strong></div>
        <?php foreach ($manifest['groups'] as $group): ?>
            <div class="manifest-group">
                <div class="manifest-group-head"><span><?= htmlspecialchars((string) $group['name'], ENT_QUOTES, 'UTF-8') ?></span><strong><?= htmlspecialchars((string) $group['summary'], ENT_QUOTES, 'UTF-8') ?></strong></div>
                <?php foreach ($group['pairs'] as $pair): ?>
                    <div class="manifest-pair"><span><?= htmlspecialchars((string) $pair[0], ENT_QUOTES, 'UTF-8') ?></span><span<?= isset($pair[2]) ? ' class="' . htmlspecialchars((string) $pair[2], ENT_QUOTES, 'UTF-8') . '"' : '' ?>><?= htmlspecialchars((string) $pair[1], ENT_QUOTES, 'UTF-8') ?></span></div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
        <div class="manifest-tags"><?php foreach ($manifest['tags'] as $tag): ?><span><?= htmlspecialchars((string) $tag, ENT_QUOTES, 'UTF-8') ?></span><?php endforeach; ?></div>
        <div class="manifest-footer"><span><svg class="icon"><use href="#gear-check"></use></svg>AUDITED <?= htmlspecialchars((string) $manifest['audited'], ENT_QUOTES, 'UTF-8') ?></span><a href="#hardware-index">Inspect spec <svg class="icon"><use href="#gear-arrow"></use></svg></a></div>
    </div>
</article>
