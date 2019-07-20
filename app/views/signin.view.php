<?php require('partials/head.php'); ?>
<div class="outContent">
  <div class="content">
    <div class="container">
      <form action="/signin" method="post" class="signin">
        <input type="text" name="pseudo" placeholder="Your pseudo" required>
        <input type="password" name="password" placeholder="Your password" required>
        <button type="submit">S'inscrire</button>
        <?php if ($error !== ''): ?>
          <?= $error; ?>
        <?php endif ?>
      </form>
    </div>
  </div>
</div>
<?php require('partials/footer.php'); ?>
