<?php require('partials/head.php'); ?>
  <div class="outContent">
    <div class="content">
      <form action="/signin" method="post" class="signin">
        <input type="text" name="pseudo" placeholder="Your pseudo">
        <input type="email" name="email" placeholder="Your Email">
        <input type="password" name="password" placeholder="Your password">
        <input type="password" name="verif-password" placeholder="Verif password">
        <button type="submit">S'inscrire</button>
      </form>
    </div>
  </div>
<?php require('partials/footer.php'); ?>
