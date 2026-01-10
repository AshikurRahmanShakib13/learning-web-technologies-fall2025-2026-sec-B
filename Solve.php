<!DOCTYPE html>
<html>
<head>
    <title>Odd or Even</title>
</head>
<body>

<h2>Check Odd or Even</h2>

<form method="post">
    <input type="number" name="num" required>
    <button type="submit">Check</button>
</form>

<?php 
if (isset($_POST['num'])) { 
    $num = (int)$_POST['num']; // Convert input to integer 
 
    if ($num % 2 === 0) { 
        echo "Even"; 
    } else { 
        echo "Odd"; 
    } 
} else { 
    echo "Please enter a number."; 
} 
?> 

</body>
</html>
