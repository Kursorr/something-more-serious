<?php require('partials/head.php'); ?>
  <div class="outContent">
    <div class="content">
      <div class="container">
        <form action="/signin" method="post" class="signin">
          <input type="text" name="pseudo" placeholder="Your pseudo">
          <input type="email" name="email" placeholder="Your Email">
          <input type="password" name="password" placeholder="Your password">
          <input type="password" name="verifpassword" placeholder="Verif password">
          <button type="submit">S'inscrire</button>
          <?php if ($error !== ''): ?>
            <?= $error; ?>
          <?php endif ?>
        </form>
      </div>
    </div>
  </div>
<?php require('partials/footer.php'); ?>
