<?php
if (!defined('INCLUDE_CHECK')) define('INCLUDE_CHECK', true);
require_once __DIR__ . '/connect.php';
initializeLoginSystem();
$sessionUser = isset($_SESSION['usr']) ? $_SESSION['usr'] : '';
?>
<!DOCTYPE html>
<html lang="ру">
<head>
    <?php include_once __DIR__ . '/metastyle_app.php'; ?>
    <title>Доступ ограничен</title>
</head>
<body>
    <div class="section" id="background"></div>
    <div class="section" id="maintheme" style="min-height:400px;display:flex;align-items:center;justify-content:center;">
        <div style="text-align:center;color:#000;">
            <h2>Доступ ограничен</h2>
            <?php if ($sessionUser !== ''): ?>
                <p>Текущий пользователь: <strong><?=htmlspecialchars($sessionUser)?></strong></p>
            <?php endif; ?>
            <p>Требуется авторизация с правами доступа.</p>
        </div>
    </div>
    <?php include_once __DIR__ . '/metastyle_end.php'; ?>
</body>
</html>