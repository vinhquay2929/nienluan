<?php
$matrixA = $_POST['matrixA'];
$matrixB = $_POST['matrixB'];
    for ($i = 0; $i < count($matrixA); $i++){
        for ($j = 0; $j < count($matrixA[$i]); $j++){
           $sum = 0;
           for($r = 0; $r < count($matrixA[0]);$r++){
                $sum += $matrixA[$i][$r] * $matrixB[$r][$j];
           }
           $result[$i][$j] = $sum;
        }
    }
    echo json_encode($result);
?>