<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["Santi", "Debra", "Azizi", "Jerome"];
    array_pop($tims);
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>