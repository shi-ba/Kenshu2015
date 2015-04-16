<?php
        $n = fgets(STDIN);
        $hani=explode(" ",$n);
        $yoko=$hani[0];
        $tate=$hani[1];
        $area=$hani[2];
        /*for($i=0;$i<$tate;$i++){
                $masu[$i]=array();
        }*/
        for($i=0;$i<$tate;$i++){
                $masu[$i]=explode(" ",str_replace(" \r\n","",fgets(STDIN)));
        }
        //for($i=0;$i<$area;$i++){
        //      $an = explode(" ",fgets(STDIN));
        //}
        //echo $masu[$an[0]-1][$an[1]-1];
        //echo $masu[$an[2]-1][$an[3]-1];
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