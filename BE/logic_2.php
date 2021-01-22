<?php
    echo "Whitespace ditambah 1 karena render html jadi collapse";
    echo "<br>";
    $panjang = 7;
    $lebar = 7;
    for($l = 0; $l < $lebar; $l++){
        for($p = 0; $p < $panjang; $p++){
            if($l == 0 || 
                $l==$p || 
                $p==0 || 
                $l==$lebar-1 || 
                $p==$panjang-1 ||
                $p==($panjang-$l)-1){
                echo "* ";
            }else{
                echo "&nbsp;&nbsp; ";
            }
        }
        echo "<br>";
    }

    echo "<br>";
    echo "Whitespace tidak ditambah (copy paste ke notepad)";
    echo "<br>";

    for($l = 0; $l < $lebar; $l++){
        for($p = 0; $p < $panjang; $p++){
            if($l == 0 || 
                $l==$p || 
                $p==0 || 
                $l==$lebar-1 || 
                $p==$panjang-1 ||
                $p==($panjang-$l)-1){
                echo "* ";
            }else{
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
?>