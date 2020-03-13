<?php if (isset($_GET['type']) && $_GET['type']=='logout'): ?>
<?php unset($_SESSION['login']);?>
<?php unset($_SESSION['login']); ?>
<meta http-equiv="refresh" content="0;url=<?=sprintf("%s://%s", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http', $_SERVER['SERVER_NAME'].'/admin')?>" />
<?php endif; ?>
?>