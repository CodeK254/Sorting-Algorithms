<?php

    $data = array(5,0,2,8,9,1);
    $sorted = false;
    echo "Array before sorting:<br>";
    for($a = 0;$a < 6;$a++)
    {
        echo " ".$data[$a];
    }
    echo "<br>";
    for($a = 0;$a < 6;$a++)
    {
        $sorted = true;
        for($b = 0;$b < 6;$b++){
            if($b!=5){
                if($data[$b] > $data[$b+1]){
                    $temp;
                    $temp = $data[$b];
                    $data[$b] = $data[$b + 1];
                    $data[$b + 1] = $temp;
                    $sorted = false;
                }
            }
        }
        if($sorted == true)
            break;
        echo "<br>After pass: <br>";
        for($c = 0;$c < 6;$c++)
        {
            echo " ".$data[$c];
        }
    }
    echo "<br><br>Sorted array is:<br>";
    for($a = 0;$a < 6;$a++)
    {
        echo " ".$data[$a];
    }
?>