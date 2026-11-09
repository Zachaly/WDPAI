<?php

declare(strict_types=1);
?>
<article class="mobile-thread<?= !empty($forumPost['featured']) ? ' mobile-thread-form' : '' ?>">
    <div class="mobile-thread-top">
        <a class="forum-avatar <?= htmlspecialchars((string) $forumPost['avatarClass'], ENT_QUOTES, 'UTF-8') ?>" href="/profile/<?= (int) $forumPost['profileId'] ?>" aria-label="View <?= htmlspecialchars((string) $forumPost['profileName'], ENT_QUOTES, 'UTF-8') ?>'s profile"><?= htmlspecialchars((string) $forumPost['initials'], ENT_QUOTES, 'UTF-8') ?></a>
        <div class="forum-author"><div><a href="/profile/<?= (int) $forumPost['profileId'] ?>"><strong>@<?= htmlspecialchars((string) $forumPost['author'], ENT_QUOTES, 'UTF-8') ?></strong></a><span class="forum-tag <?= htmlspecialchars((string) $forumPost['badgeClass'], ENT_QUOTES, 'UTF-8') ?>"><?php if (!empty($forumPost['badgeIcon'])): ?><svg class="icon"><use href="#forum-shield"></use></svg><?php endif; ?><?= htmlspecialchars((string) $forumPost['badge'], ENT_QUOTES, 'UTF-8') ?></span></div><small><?= htmlspecialchars((string) $forumPost['meta'], ENT_QUOTES, 'UTF-8') ?></small></div>
        <a class="forum-bookmark" href="#<?= htmlspecialchars((string) $forumPost['id'], ENT_QUOTES, 'UTF-8') ?>" aria-label="Save discussion"><svg class="icon"><use href="#forum-bookmark"></use></svg></a>
    </div>
    <h2><?= htmlspecialchars((string) $forumPost['title'], ENT_QUOTES, 'UTF-8') ?></h2>
    <?php if (($forumPost['media'] ?? '') === 'form'): ?>
        <div class="mobile-video" style="background-image:url('/assets/img/form-check.jpg')"><span class="mobile-video-label"><svg class="icon"><use href="#forum-chart"></use></svg>BAR VELOCITY 0.28 m/s</span><span class="forum-video-play"><svg class="icon"><use href="#forum-play"></use></svg></span><span class="forum-video-time">0:42</span><strong>KINEMATIC TRACK: 3RD ATTEMPT SIMULATION <i>4K 60FPS</i></strong></div>
    <?php elseif (($forumPost['media'] ?? '') === 'gear'): ?>
        <div class="mobile-knurl-comparison"><div class="knurl-photo" style="background-image:url('/assets/img/black-iron.jpg')"><span>MICROMETER: 1.2mm PYRAMID</span></div><div class="grip-score"><span>GRIP RET.</span><strong>92.4%</strong><small><svg class="icon"><use href="#forum-bars"></use></svg> Raw Steel</small></div></div>
        <p><?= htmlspecialchars((string) $forumPost['excerpt'], ENT_QUOTES, 'UTF-8') ?></p>
    <?php elseif (($forumPost['media'] ?? '') === 'meet'): ?>
        <div class="mobile-meet-stats"><div><span>CUT TARGET</span><strong>-4.2 kg</strong></div><div><span>REFEED TIME</span><strong class="text-blue">14 hrs</strong></div><div><span>TOTAL</span><strong class="text-lime">542.5 kg</strong></div></div>
        <p><?= htmlspecialchars((string) $forumPost['excerpt'], ENT_QUOTES, 'UTF-8') ?></p>
    <?php elseif (($forumPost['media'] ?? '') === 'policy'): ?>
        <div class="mobile-policy"><span></span>12 Combo Racks: 20-min max squat rotation<b>POLICY</b></div>
    <?php endif; ?>
    <div class="mobile-thread-footer"><span><svg class="icon"><use href="#forum-up"></use></svg><?= htmlspecialchars((string) $forumPost['votes'], ENT_QUOTES, 'UTF-8') ?></span><span><svg class="icon"><use href="#forum-chat"></use></svg><?= htmlspecialchars((string) $forumPost['replies'], ENT_QUOTES, 'UTF-8') ?></span>
        <?php if (($forumPost['media'] ?? '') === 'form'): ?><b>NEEDS 2 COACH VOTES</b><?php elseif (($forumPost['media'] ?? '') === 'gear'): ?><b class="mobile-report-link"><svg class="icon"><use href="#forum-scale"></use></svg>LAB REPORT</b><?php elseif (($forumPost['media'] ?? '') === 'meet'): ?><b class="meet-trophy"><svg class="icon"><use href="#forum-trophy"></use></svg>NATIONALS 2024</b><?php elseif (($forumPost['media'] ?? '') === 'policy'): ?><b class="mobile-location"><svg class="icon"><use href="#forum-pin"></use></svg>EAST DOCK, AUSTIN</b><?php endif; ?>
    </div>
</article>
