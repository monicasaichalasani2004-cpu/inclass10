<?php
$lastVisit = $_COOKIE['LAST_VISIT'] ?? '';
$visitCount = (int)($_COOKIE['VISIT_NUMBER'] ?? 0);
$firstVisit = $_COOKIE['FIRST_VISIT'] ?? '';
$now = date('l, F j, Y \a\t g:i A');
setcookie('LAST_VISIT', $now, time() + 14 * 86400, '/');
setcookie('VISIT_NUMBER', (string)($visitCount + 1), time() + 14 * 86400, '/');
if ($firstVisit === '') {
    $firstVisit = $now;
    setcookie('FIRST_VISIT', $firstVisit, time() + 365 * 86400, '/');
}
// Step 11: random-number cookie, expires in 30 days.
setcookie("random_number", rand(1, 100), time() + (86400 * 30), "/");
function e($value) { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Cookies Lab</title><link rel="stylesheet" href="styles.css"></head><body><main class="container"><header><span class="eyebrow">CSC 4370 / 6370 • Exercise 10</span><h1>Cookie History Lab</h1><p>Check what this browser remembers between visits.</p></header><section class="panel"><h2>History Information</h2><div class="stat-grid"><div class="stat"><small>Visit number</small><strong><?= $visitCount + 1 ?></strong></div><div class="stat"><small>Previous visit</small><strong><?= $lastVisit !== '' ? e($lastVisit) : 'First visit' ?></strong></div></div><p><b>First visit:</b> <?= e($firstVisit) ?></p><p><b>Current visit:</b> <?= e($now) ?></p><?php if ($visitCount > 0): ?><p class="success">Welcome back!</p><?php else: ?><p>Welcome! This looks like your first visit.</p><?php endif; ?><p class="muted">Refresh this page to increment the visit counter. Inspect cookies in DevTools → Application → Cookies.</p></section><section class="panel"><h2>Login test</h2><p>Use the practice password provided in the assignment.</p><form action="session-cookies-2.php" method="post"><label for="password">Password</label><input id="password" name="password" type="password" required><button type="submit">Log in</button></form></section><nav><a href="session-cookies-3.php">Try protected page without logging in</a><a href="logout.php">Log out</a></nav></main></body></html>
