<?php
    echo "tugas nomor 3";echo "<br>";
    echo "bilangan prima 1-50";
    echo "<br>"; echo "<br>";

    function prima($a,$b){
        for($i=$a;$i<=$b;$i++){
            $bil=0;
            for($j=1;$j<=$i;$j++){
                if($i%$j==0){
                    $bil=$bil+1;
                }
            }
            if($bil==2){
                echo "$i";
                echo " ";
            }
        }
    }
    prima(1,50); 
?>

