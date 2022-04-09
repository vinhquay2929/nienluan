<?php
$matrixA = $_POST['matrixA'];
    for ($i = 0; $i < count($matrixA); $i++){
        for ($j = 0; $j < count($matrixA[$i]); $j++){
          $result[$i][$j] = $matrixA[$j][$i];
        }
    }
    echo json_encode($result);
?>