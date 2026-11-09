<?php

declare(strict_types=1);
?>
<article class="knurl-card<?= !empty($knurl['blue']) ? ' knurl-card-blue' : '' ?>">
    <div class="knurl-card-top"><span class="knurl-brand"><?= htmlspecialchars((string) $knurl['brand'], ENT_QUOTES, 'UTF-8') ?></span><span class="knurl-weight"><?= htmlspecialchars((string) $knurl['weight'], ENT_QUOTES, 'UTF-8') ?></span></div>
    <h3><?= htmlspecialchars((string) $knurl['name'], ENT_QUOTES, 'UTF-8') ?></h3>
    <dl><div><dt>Profile</dt><dd><?= htmlspecialchars((string) $knurl['profile'], ENT_QUOTES, 'UTF-8') ?></dd></div><div><dt>Shaft</dt><dd><?= htmlspecialchars((string) $knurl['shaft'], ENT_QUOTES, 'UTF-8') ?></dd></div></dl>
    <div class="aggression"><span>AGGRESSION</span><strong aria-label="<?= (int) $knurl['aggression'] ?> out of 5 stars"><?= str_repeat('★', (int) $knurl['aggression']) ?><?php if ((int) $knurl['aggression'] < 5): ?><i><?= str_repeat('★', 5 - (int) $knurl['aggression']) ?></i><?php endif; ?></strong></div>
</article>
