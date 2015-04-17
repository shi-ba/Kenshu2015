<?php
        $hani = explode(" ",str_replace(" \r\n","",fgets(STDIN)));
        $yoko = $hani[0];
        $tate = $hani[1];
        for($j=0;$j<$yoko;$j++){
                $cz[$j]=0;
        }
        for($i=0;$i<$tate;$i++){
                $retu = explode(" ",str_replace(" \r\n","",fgets(STDIN)));
                for($j=0;$j<$yoko;$j++){
                        if($retu[$j]!=1){
                                $cz[$j]++;
                        }
                }
        }
        for($i=0;$i<$tate;$i++){
                for($j=0;$j<$yoko;$j++){
                        if($cz[$j]>0){
                                echo '0';
                                $cz[$j]--;
                        }else{
                                echo '1';
                        }
                        if($j==$yoko-1){
                                echo "\n";
                        }else{
                                echo " ";
                        }
                }
        }
?>