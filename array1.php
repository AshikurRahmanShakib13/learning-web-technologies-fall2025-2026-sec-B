<?php
$car = array("brand"=>"Ford","model"=>"Mustang","year"=>1964);
echo $car["model"];

foreach($car as $x=>$y) {
    echo "$x: $y <br>";
}
?>