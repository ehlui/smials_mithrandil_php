<p style="color:red">
    <b><?php echo $_SESSION['file']['name'] ?></b>
    is not valid because of the extension
    <b><?php echo $_SESSION['file']['extension'] ?></b>
    is not valid.
</p>
<p> Valid extensions:
    <b><?php echo implode(', ', $_SESSION['file']['valid_extensions']) ?></b>
</p>
<?php
?>