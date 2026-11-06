<!doctype html>
<html lang="<?= htmlspecialchars((string) ($pageLanguage ?? 'en'), ENT_QUOTES, 'UTF-8') ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars((string) ($pageDescription ?? ''), ENT_QUOTES, 'UTF-8') ?>">
    <title><?= htmlspecialchars((string) ($pageTitle ?? 'IronPulse'), ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%230b1326'/%3E%3Cpath d='M7 12v8M10 9v14M22 9v14M25 12v8M10 16h12' stroke='%23c3f400' stroke-width='2' stroke-linecap='round'/%3E%3C/svg%3E">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <?php foreach ($pageStylesheets ?? [] as $stylesheet): ?>
        <link rel="stylesheet" href="<?= htmlspecialchars((string) $stylesheet, ENT_QUOTES, 'UTF-8') ?>">
    <?php endforeach; ?>
    <script src="/js/schemeChange.js" defer></script>
</head>
<body<?= isset($bodyClass) && $bodyClass !== '' ? ' class="' . htmlspecialchars((string) $bodyClass, ENT_QUOTES, 'UTF-8') . '"' : '' ?>>
<?= $content ?>
</body>
</html>
