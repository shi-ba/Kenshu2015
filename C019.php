<?php
    $sou = fgets(STDIN);

    for($i=0;$i<$sou;$i++){
        $nums[$i] = fgets(STDIN);
    }

    for($i=0;$i<$sou;$i++){
        $sum=0;
        for($j=1;$j<$nums[$i];$j++){
            if($nums[$i] % $j == 0){
                $sum+=$j;
            }
        }
        if($sum == $nums[$i]){
            echo "perfect\n";
        }else if(abs($sum - $nums[$i]) == 1){
            echo "nearly\n";
        }else{
            echo "neither\n";
        }

    }

?>