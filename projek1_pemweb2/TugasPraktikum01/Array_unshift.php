<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["Santi", "Debra", "Azizi", "Jerome"];
    array_unshift($tims, "Budi", "Saskeh");
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>