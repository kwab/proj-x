<?php
/*
 *lucid
 */
require_once "include/Session.php";
$session = new Session();
?>

<ul>
  <li><a href=".">Home</a></li>
  <li><a href="">Create</a></li>
  <li><a href="">View</a></li>
  <li><a href="">Search</a></li>
  <li style="position: absolute;top:0;right:0;">
      <?php if (!isset($session->valid)): ?>
        <a href="login.php">Login</a>
      <?php else: ?>
      <a href="logout.php">Logout (<?php echo $session->valid->user?>)</a>
    <?php endif ?>
  </li>
</ul>


