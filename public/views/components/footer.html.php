<?php

declare(strict_types=1);
?>
<footer class="<?= htmlspecialchars((string) $footerComponent['class'], ENT_QUOTES, 'UTF-8') ?>">
    <div class="<?= htmlspecialchars((string) $footerComponent['gridClass'], ENT_QUOTES, 'UTF-8') ?>">
        <div class="<?= htmlspecialchars((string) $footerComponent['brandClass'], ENT_QUOTES, 'UTF-8') ?>">
            <a href="/" class="<?= htmlspecialchars((string) $footerComponent['logoClass'], ENT_QUOTES, 'UTF-8') ?>">
                <span class="<?= htmlspecialchars((string) $footerComponent['logoMarkClass'], ENT_QUOTES, 'UTF-8') ?>"><svg class="icon"><use href="#<?= htmlspecialchars((string) $iconPrefix, ENT_QUOTES, 'UTF-8') ?>-dumbbell"></use></svg></span>
                <?php if ($footerComponent['logoTextClass'] === ''): ?>
                    IRONPULSE
                <?php else: ?>
                    <span class="<?= htmlspecialchars((string) $footerComponent['logoTextClass'], ENT_QUOTES, 'UTF-8') ?>"><strong>IRONPULSE</strong></span>
                <?php endif; ?>
            </a>
            <p><?= htmlspecialchars((string) $footerComponent['description'], ENT_QUOTES, 'UTF-8') ?></p>
            <<?= $footerComponent['networkTag'] ?>><i></i> NETWORK: 142 GYMS ACTIVE &nbsp;
            <?php if ($footerComponent['boldNetworkSeparator']): ?><b>&bull;</b><?php else: ?>&bull;<?php endif; ?>
            &nbsp; TELEMETRY LATENCY: 18MS</<?= $footerComponent['networkTag'] ?>>
        </div>
        <?php foreach ($footerComponent['columns'] as $column): ?>
            <div>
                <?php if ($footerComponent['headingTag'] === 'b'): ?><b><?= htmlspecialchars((string) $column['heading'], ENT_QUOTES, 'UTF-8') ?></b><?php else: ?><strong><?= htmlspecialchars((string) $column['heading'], ENT_QUOTES, 'UTF-8') ?></strong><?php endif; ?>
                <?php foreach ($column['links'] as $link): ?>
                    <a href="<?= htmlspecialchars((string) $link['href'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars((string) $link['label'], ENT_QUOTES, 'UTF-8') ?></a>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="<?= htmlspecialchars((string) $footerComponent['bottomClass'], ENT_QUOTES, 'UTF-8') ?>">
        <span>&copy; 2025 IRONPULSE TELEMETRY CORP. &nbsp; &bull; &nbsp; ENGINEERED FOR STRENGTH</span>
        <span>SYSTEM REVISION 2.4.9 &nbsp; &bull; &nbsp; <?php if ($footerComponent['showSystemDot']): ?><i></i> <?php endif; ?>ALL NODES OPERATIONAL</span>
    </div>
</footer>
