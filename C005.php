<?php
$sou = fgets(STDIN);
for($i=0;$i<$sou;$i++){
        $ip[$i] = fgets(STDIN);
}

for($i=0;$i<$sou;$i++){
        $ok = 0;
        $suti = explode(".",$ip[$i]); //explode by dot
        if(count($suti) == 4){
                for($j=0;$j<4;$j++){
                        echo "aaa";
                        if($suti[$j] != null){
                                if($suti[$j]>=0 && $suti[$j]<=255){
                                        $ok = 1;
                                }
                        }
                }
        }
        if($ok == 1){
                echo "True\n";
        }else{
                echo "False\n";
        }
}

?>
