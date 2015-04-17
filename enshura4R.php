<?php
        $hani = explode(" ",str_replace(" \r\n","",fgets(STDIN)));
        $tate=$hani[1];
        $area=$hani[2];
        /*for($i=0;$i<$tate;$i++){
                $masu[$i]=array();
        }*/
        for($i=0;$i<$tate;$i++){
                $masu[$i]=explode(" ",str_replace(" \r\n","",fgets(STDIN)));
        }
        $sum = 0;
        for($k=0;$k<$area;$k++){
                $an=explode(" ",str_replace(" \r\n","",fgets(STDIN)));
                for($i=$an[0];$i<=$an[2];$i++){
                        for($j=$an[1];$j<=$an[3];$j++){
                                $sum += $masu[$j-1][$i-1];
                                $masu[$j-1][$i-1] = 0;
                        }
                }
        }
        echo $sum."\n";

?>