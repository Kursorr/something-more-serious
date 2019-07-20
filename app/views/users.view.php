<?php session_start(); ?>
<?php require('partials/head.php'); ?>

<div class="outContent">
  <div class="content">
    <?php if (isset($_SESSION)): ?>
      connected as <?= $_SESSION['pseudo'] ?>
    <?php endif ?>
    <h1>All Users</h1>

    <?php foreach ($users as $user) : ?>
      <li><?= $user->pseudo; ?></li>
    <?php endforeach; ?>
  </div>
</div>

<?php require('partials/footer.php'); ?>
