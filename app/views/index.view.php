<?php if (session_status() === 2) session_start() ?>
<?php require('partials/head.php');?>
  <h1>Home Page</h1>
  <?php if ($_SESSION['pseudo']): ?>
    Welcome <?= $_SESSION['pseudo'] ?>
  <?php endif ?>
<?php require('partials/footer.php'); ?>
