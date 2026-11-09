<?php

declare(strict_types=1);
?>
<article class="forum-thread<?= !empty($forumPost['featured']) ? ' forum-thread-featured' : '' ?><?= !empty($forumPost['optional']) ? ' forum-thread-optional' : '' ?>"<?= !empty($forumPost['id']) ? ' id="' . htmlspecialchars((string) $forumPost['id'], ENT_QUOTES, 'UTF-8') . '"' : '' ?>>
    <div class="forum-vote" aria-label="<?= htmlspecialchars((string) $forumPost['votes'], ENT_QUOTES, 'UTF-8') ?> votes"><svg class="icon"><use href="#forum-up"></use></svg><strong><?= htmlspecialchars((string) $forumPost['votes'], ENT_QUOTES, 'UTF-8') ?></strong><svg class="icon vote-down"><use href="#forum-up"></use></svg></div>
    <div class="forum-thread-main">
        <div class="forum-thread-heading">
            <a class="forum-avatar <?= htmlspecialchars((string) $forumPost['avatarClass'], ENT_QUOTES, 'UTF-8') ?>" href="/profile/<?= (int) $forumPost['profileId'] ?>" aria-label="View <?= htmlspecialchars((string) $forumPost['profileName'], ENT_QUOTES, 'UTF-8') ?>'s profile"><?= htmlspecialchars((string) $forumPost['initials'], ENT_QUOTES, 'UTF-8') ?></a>
            <div class="forum-author">
                <div>
                    <a href="/profile/<?= (int) $forumPost['profileId'] ?>"><strong>@<?= htmlspecialchars((string) $forumPost['author'], ENT_QUOTES, 'UTF-8') ?></strong></a>
                    <span class="<?= htmlspecialchars((string) $forumPost['badgeClass'], ENT_QUOTES, 'UTF-8') ?>"><?php if (!empty($forumPost['badgeIcon'])): ?><svg class="icon"><use href="#forum-shield"></use></svg><?php endif; ?><?= htmlspecialchars((string) $forumPost['badge'], ENT_QUOTES, 'UTF-8') ?></span>
                </div>
                <small><?= htmlspecialchars((string) $forumPost['meta'], ENT_QUOTES, 'UTF-8') ?></small>
            </div>
            <?php if (!empty($forumPost['category']) && empty($forumPost['categoryInAuthor'])): ?><span class="forum-post-category <?= htmlspecialchars((string) $forumPost['categoryClass'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars((string) $forumPost['category'], ENT_QUOTES, 'UTF-8') ?></span><?php endif; ?>
            <?php if (!empty($forumPost['location'])): ?><span class="forum-location"><?= htmlspecialchars((string) $forumPost['location'], ENT_QUOTES, 'UTF-8') ?></span><?php endif; ?>
            <?php if (!empty($forumPost['award'])): ?><span class="forum-award"><?= htmlspecialchars((string) $forumPost['award'], ENT_QUOTES, 'UTF-8') ?></span><?php endif; ?>
            <?php if (!empty($forumPost['sanctioned'])): ?><span class="forum-sanctioned"><?= htmlspecialchars((string) $forumPost['sanctioned'], ENT_QUOTES, 'UTF-8') ?></span><?php endif; ?>
            <a class="forum-bookmark" href="#<?= htmlspecialchars((string) ($forumPost['id'] ?? 'discussion-feed'), ENT_QUOTES, 'UTF-8') ?>" aria-label="Save discussion"><svg class="icon"><use href="#forum-bookmark"></use></svg></a>
        </div>
        <h2><a href="/forum/<?= (int) $forumPost['postId'] ?>"><?= htmlspecialchars((string) $forumPost['title'], ENT_QUOTES, 'UTF-8') ?></a></h2>
        <?php if (($forumPost['media'] ?? '') === 'form'): ?>
            <div class="forum-video" style="background-image:url('/assets/img/form-check.jpg')">
                <span class="forum-video-label"><svg class="icon"><use href="#forum-chart"></use></svg>BAR VELOCITY 0.28 m/s</span>
                <span class="forum-video-play"><svg class="icon"><use href="#forum-play"></use></svg></span>
                <span class="forum-video-time">0:42</span>
                <span class="forum-video-caption">Kinematic track: 3rd attempt simulation <b>4K 60FPS</b></span>
            </div>
        <?php elseif (($forumPost['media'] ?? '') === 'gear'): ?>
            <div class="forum-gear-comparison">
                <div class="knurl-photo" style="background-image:url('/assets/img/black-iron.jpg')"><span>MICROMETER: 1.2mm PYRAMID</span></div>
                <div class="grip-score"><span>GRIP RET.</span><strong>92.4%</strong><small><svg class="icon"><use href="#forum-bars"></use></svg> RAW STEEL</small></div>
            </div>
        <?php elseif (($forumPost['media'] ?? '') === 'meet'): ?>
            <div class="meet-stats"><div><span>CUT TARGET</span><strong>-4.2 kg</strong></div><div><span>REFEED TIME</span><strong class="text-blue">14 hrs</strong></div><div><span>TOTAL</span><strong class="text-lime">542.5 kg</strong></div></div>
        <?php endif; ?>
        <?php if (!empty($forumPost['excerpt'])): ?><p class="forum-excerpt"><?= htmlspecialchars((string) $forumPost['excerpt'], ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
        <?php if (($forumPost['media'] ?? '') === 'gear'): ?><div class="forum-lab-report"><svg class="icon"><use href="#forum-scale"></use></svg><span><small>MICRON RESOLUTION COMPARISON</small><br>Eleiko 1.2mm Tooth Height / Rogue 1.1mm Tooth Height</span><b>FULL CAD DATA ATTACHED</b></div><?php endif; ?>
        <?php if (!empty($forumPost['tags'])): ?><div class="forum-thread-tags"><?php foreach ($forumPost['tags'] as $tag): ?><i><?= htmlspecialchars((string) $tag, ENT_QUOTES, 'UTF-8') ?></i><?php endforeach; ?></div><?php endif; ?>
        <div class="forum-thread-footer">
            <span><svg class="icon"><use href="#forum-chat"></use></svg><b><?= htmlspecialchars((string) $forumPost['replies'], ENT_QUOTES, 'UTF-8') ?></b> Replies</span>
            <span><svg class="icon"><use href="#forum-eye"></use></svg><?= htmlspecialchars((string) $forumPost['views'], ENT_QUOTES, 'UTF-8') ?> Views</span>
            <?php if (!empty($forumPost['velocity'])): ?><span class="forum-velocity"><svg class="icon"><use href="#forum-chart"></use></svg>Bar Velocity 0.28 m/s</span><?php endif; ?>
            <?php if (!empty($forumPost['mobileAction'])): ?><span class="forum-mobile-actions"><b><svg class="icon"><use href="#forum-up"></use></svg><?= htmlspecialchars((string) $forumPost['votes'], ENT_QUOTES, 'UTF-8') ?></b><b><svg class="icon"><use href="#forum-chat"></use></svg><?= htmlspecialchars((string) $forumPost['replies'], ENT_QUOTES, 'UTF-8') ?></b><strong>NEEDS 2 COACH VOTES</strong></span><?php endif; ?>
        </div>
    </div>
</article>
