<?php
    $matrixA = $_POST['matrixA'];
        function reduce_matrix($arr, $row, $col){
            $temp = array();
            $i_temp = 0;
            $j_temp = 0;
            for($i =1; $i <= count($arr); $i++){
                if($i != $row){
                    for($j =1; $j <= count($arr[$i-1]); $j++){
                        if($j != $col){
                            $temp[$i_temp][$j_temp] = $arr[$i-1][$j-1];
                            $j_temp++;
                        }
                    }
                    $j_temp = 0;
                    $i_temp++;
                }
            }
            return $temp;
        }
        function det($matrix){
            $d = 0;
            if(count($matrix)==2)
                return $matrix[0][0] * $matrix[1][1] - $matrix[0][1] * $matrix[1][0];
            for($i =1; $i <= count($matrix); $i++){
                $d += pow(-1, $i +1) * $matrix[$i -1][0] * det(reduce_matrix($matrix, $i, 1));
            }
            return $d;
        }
            echo det($matrixA);
?>