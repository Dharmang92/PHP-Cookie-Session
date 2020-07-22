<?php
if (!isset($_COOKIE["count"])) {
    setcookie("count", 0, time() + 10);
}
?>

<pre>
    <?php print_r($_COOKIE); ?>
</pre>
<a href="cookie.php">Click me</a> or Refresh the page.