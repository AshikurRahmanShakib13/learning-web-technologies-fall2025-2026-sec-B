<?php 
$conn = mysqli_connect("localhost", "root", "", "myDB"); 

$sql = "SELECT id, name, email FROM Users"; 
$result = mysqli_query($conn, $sql); 

if (mysqli_num_rows($result) > 0) { 
    while ($row = mysqli_fetch_assoc($result)) { 
        echo "ID: " . $row["id"] . 
             " - Name: " . $row["name"] . 
             " - Email: " . $row["email"] . "<br>"; 
    } 
} else { 
    print_r("0 results"); 
} 
?>
