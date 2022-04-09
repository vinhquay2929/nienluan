<?php
$matrixA = $_POST['matrixA'];
$matrixB = $_POST['matrixB'];
if (count($matrixA) == count($matrixB) && count($matrixA[0]) == count($matrixB[0])){
    for ($i = 0; $i < count($matrixA); $i++){
        for ($j = 0; $j < count($matrixA[$i]); $j++){
            $result[$i][$j] = $matrixA[$i][$j] - $matrixB[$i][$j];
        }
    }
    echo json_encode($result);
} else
    echo 'err'
?>