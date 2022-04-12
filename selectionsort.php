<?php 

    
    $Array = array(1,0,8,6,4,7);
    $low;
    $temp;
    echo "Array before being sorted:<br>";
    for($c = 0;$c < (count($Array));$c++)
    {
        echo " ".$Array[$c];
    }
    echo "<br>";

    for($a = 0;$a < (count($Array) - 1);$a++)
    {
        $low = $a;
        for($b = $a + 1;$b < count($Array);$b++)
        {
            if($Array[$b] < $Array[$low])
            {
                $low = $b;
            }
        }
        $temp = $Array[$low];
        $Array[$low] = $Array[$a];
        $Array[$a] = $temp;
        echo "<br>Pass ".$a."<br>";
        for($c = 0;$c < (count($Array));$c++)
        {
            echo " ".$Array[$c];
        }
    }
    echo "<br><br>";
    echo "Sorted array is:<br>";
    for($c = 0;$c < (count($Array));$c++)
    {
        echo " ".$Array[$c];
    }
?>
