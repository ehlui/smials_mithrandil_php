<p style="color:green">
    <?php echo $_SESSION['file']['name'] ?>
    <b>uploaded !</b>
</p>
<?php
# It may set the path from the "imported" file not the "actual script
include 'helpers.php';
echo build_img_tag($_SESSION['file']);