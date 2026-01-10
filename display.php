<?php
$name = $_POST['username'];
$age = $_POST['age'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Page</title>
</head>
<body>

<h2>Welcome!</h2>
<p>Your name is: <?php echo $name; ?></p>
<p>Your age is: <?php echo $age; ?></p>

</body>
</html>
