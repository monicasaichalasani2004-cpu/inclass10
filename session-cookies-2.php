<?php
session_start();
$firstLogin = false;
if (($_SESSION['authorized'] ?? '') === 'ok') {
    $authorized = true;
} else {
    $password = trim((string)($_POST['password'] ?? ''));
    $authorized = hash_equals('Test', $password);
    if ($authorized) {
        session_regenerate_id(true);
        $_SESSION['authorized'] = 'ok';
        $firstLogin = true;
    }
}
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Login Lab</title><link rel="stylesheet" href="styles.css"></head><body><main class="container"><header><span class="eyebrow">CSC 4370 / 6370 • Exercise 10</span><h1>Login &amp; Sessions</h1><p>This page checks the password and stores authorization server-side.</p></header><section class="panel"><?php if ($authorized): ?><h2 class="success">Authorization Succeeded</h2><p><?= $firstLogin ? 'You just signed in.' : 'Your existing session is still authorized.' ?></p><p>Now open the protected page to test session persistence.</p><a class="link-button" href="session-cookies-3.php">Open protected page</a><?php else: ?><h2>Authorization Failed</h2><p>That password was not accepted. Return to Lab 1 and try again.</p><a class="link-button" href="session-cookies-1.php">Try again</a><?php endif; ?></section><nav><a href="session-cookies-1.php">Cookie lab</a><a href="logout.php">Log out</a></nav></main></body></html>
