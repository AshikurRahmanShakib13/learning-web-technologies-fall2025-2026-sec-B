<!DOCTYPE html>
<html>
<head>
    <title>Marks</title>
</head>
<body>

<h2>Check Grade</h2>

<form method="post">
    <input type="number" name="marks" required>
    <button type="submit">Check</button>
</form>

<?php
    if (isset($_POST['marks'])) { 
    $marks = (int)$_POST['marks'];  
    $grade = ""; 
 
            if ($marks > 100) {
                echo "Please enter a valid mark.";
            }
            elseif ($marks >= 90) { 
                $grade = "A"; 
            } elseif ($marks >= 80) { 
                $grade = "B"; 
            } elseif ($marks >= 70) { 
                $grade = "C"; 
            } else { 
                $grade = "D"; 
            } 
 
            echo "Grade: " . $grade; 
} else { 
    echo "Please enter the marks."; 
} 
?>

</body>
</html>
