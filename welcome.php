<html>
    <body>
        welcome <?php 
        echo $_POST["name"]; ?> <br>
        Your email address is : <?php echo $_POST["email"]; 
        ?>
    </body>
</html>
<?php 
$x = 75;
$y = 25;
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
?>