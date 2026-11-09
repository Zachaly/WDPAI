<?php

declare(strict_types=1);
?>
<article class="review-card">
    <div class="review-media" style="background-image:url('<?= htmlspecialchars((string) $review['image'], ENT_QUOTES, 'UTF-8') ?>')">
        <div class="media-top">
            <span class="media-badge"><svg class="icon icon-lime"><use href="#i-shield"></use></svg>AUDITED FACILITY</span>
            <span class="rating"><svg class="icon"><use href="#i-star"></use></svg><?= htmlspecialchars((string) $review['rating'], ENT_QUOTES, 'UTF-8') ?></span>
        </div>
        <div class="media-caption">
            <span class="eyebrow-text text-lime"><?= htmlspecialchars((string) $review['location'], ENT_QUOTES, 'UTF-8') ?></span>
            <h3><?= htmlspecialchars((string) $review['name'], ENT_QUOTES, 'UTF-8') ?></h3>
        </div>
    </div>
    <div class="review-body">
        <dl class="spec-list">
            <?php foreach ($review['specs'] as $spec): ?>
                <div>
                    <dt><svg class="icon <?= htmlspecialchars((string) $spec['iconClass'], ENT_QUOTES, 'UTF-8') ?>"><use href="#i-check"></use></svg><?= htmlspecialchars((string) $spec['label'], ENT_QUOTES, 'UTF-8') ?></dt>
                    <dd><?php if ($spec['strong']): ?><strong><?= htmlspecialchars((string) $spec['value'], ENT_QUOTES, 'UTF-8') ?></strong><?php else: ?><?= htmlspecialchars((string) $spec['value'], ENT_QUOTES, 'UTF-8') ?><?php endif; ?><?php if (!empty($spec['detail'])): ?> <span><?= htmlspecialchars((string) $spec['detail'], ENT_QUOTES, 'UTF-8') ?></span><?php endif; ?></dd>
                </div>
            <?php endforeach; ?>
        </dl>
        <blockquote class="quote">
            <p><?= htmlspecialchars((string) $review['quote'], ENT_QUOTES, 'UTF-8') ?></p>
            <footer><span class="<?= htmlspecialchars((string) $review['reviewerRoleClass'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars((string) $review['reviewerRole'], ENT_QUOTES, 'UTF-8') ?></span><span class="muted">&middot; <?= htmlspecialchars((string) $review['reviewer'], ENT_QUOTES, 'UTF-8') ?></span></footer>
        </blockquote>
        <div class="tag-row">
            <?php foreach ($review['tags'] as $tag): ?>
                <span class="tag tag-steel"><?= htmlspecialchars((string) $tag, ENT_QUOTES, 'UTF-8') ?></span>
            <?php endforeach; ?>
        </div>
        <div class="review-meta">
            <span class="muted">Rated by <?= htmlspecialchars((string) $review['reviewCount'], ENT_QUOTES, 'UTF-8') ?> lifters</span>
            <a class="text-link" href="#reviews">Full Specs <svg class="icon"><use href="#i-arrow-right"></use></svg></a>
        </div>
    </div>
</article>
