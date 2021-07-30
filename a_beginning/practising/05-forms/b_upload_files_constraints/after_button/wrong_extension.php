<p style="color:red">
    <b><?php echo $_SESSION['file']['name'] ?></b>
    is not valid because of the extension
    <b><?php echo $_SESSION['file']['extension'] ?></b>
    is not valid.
</p>
<p> Valid extensions:
    <?php echo implode(', ', $_SESSION['file']['valid_extensions']) ?>
</p>
<?php
session_destroy();
$_SESSION = null;

# Avoid reload the page with session data not deleted yet
header("Location: index.php");
s ?>