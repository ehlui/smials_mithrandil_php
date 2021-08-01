<?php echo '<h2> Hey ' . $_SESSION['user'] . '</h2>' ?>
<div style="padding: 20px">
    <form method="post" action="logout.php">
        <input type="submit" name="submit" value="logout"/>
    </form>
</div>