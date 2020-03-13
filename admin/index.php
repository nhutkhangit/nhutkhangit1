<?php session_start(); ?>
<?php if (isset($_SESSION['login'])) :?>
<?php include_once("modules/mod_index/mod_index.php"); ?>
<?php else: ?>
  <?php include_once("modules/mod_login/mod_login.php"); ?>
<?php endif; ?>

