<?php
session_start();

if (!isset($_SESSION["count"])) {
    echo "Session is empty! Creating session";
    $_SESSION["count"] = 0;
} else if ($_SESSION["count"] < 5) {
    $_SESSION["count"] += 1;
    echo "Added 1 count.";
} else {
    session_destroy();
    session_start();
    echo "Old Session Destroyed and New Session Started.";
}
?>

<html>

<body>
    <p>
        <h3>Session ID: <?php echo session_id(); ?></h3>
    </p>

    <a href="session.php">Click me to add a count</a> or Refresh the page.

    <pre>
        <?php print_r($_SESSION); ?>
    </pre>
</body>

</html>