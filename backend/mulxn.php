<?php
$matrixA = $_POST['matrixA'];
$number = $_POST['number'];
    for ($i = 0; $i < count($matrixA); $i++){
        for ($j = 0; $j < count($matrixA[$i]); $j++){
            $result[$i][$j] = $matrixA[$i][$j] * $number;   
            }
        }
    echo json_encode($result);
?>