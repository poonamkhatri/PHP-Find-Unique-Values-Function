<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Unique Values</title>
<style>
    .given-values {
        font-weight: bold;
        color: #0000FF;
    }
    .unique-values {
        font-weight: bold;
        color: #008000;
    }
</style>
</head>
<body>

<?php
function getUniqueValues($array) {
    $uniqueValues = array();
    
    foreach ($array as $value) {
        if (!in_array($value, $uniqueValues)) {
            $uniqueValues[] = $value;
        }
    }
    
    return $uniqueValues;
}

$myArray = array(1, 2, 3, 2, 4, 1, 5,8,8,9,10,34,10,9);
echo "<h3 class='given-values'>Given values are: ";
$lastIndex = count($myArray) - 1;
foreach ($myArray as $key => $value) {
    echo $value;
    if ($key != $lastIndex) {
        echo ", ";
    }
}
echo "</h3>";

$uniqueArray = getUniqueValues($myArray);
echo "<h3 class='unique-values'>Unique values are: ";
$lastIndexUnique = count($uniqueArray) - 1;
foreach ($uniqueArray as $key => $value) {
    echo $value;
    if ($key != $lastIndexUnique) {
        echo ", ";
    }
}
echo "</h3>";
?>

</body>
</html>
