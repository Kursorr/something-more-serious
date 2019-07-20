<div class="outContent">
  <div class="content">
    <div class="header">
      <nav>
        <div class="logo"></div>
        <ul>
          <li><a href="/"><span>Home</span></a></li>
          <?php if (isset($_SESSION) && $_SESSION['pseudo']): ?>
            <li><a href="/logout"><span>Log out</span></a></li>
          <?php else: ?>
            <li><a href="/signup"><span>Sign up</span></a></li>
            <li><a href="/signin"><span>Sign in</span></a></li>
          <?php endif ?>
          <li><a href="/contact"><span>Contact</span></a></li>
          <li><a href="/users"><span>Manage Users</span></a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
