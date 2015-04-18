<?php
    //レナルート(表計算)
    //最終テストケース全パス
    //柴田和樹、中野大輝
        $hani = explode(" ",str_replace(" \r\n","",fgets(STDIN)));
        $tate=$hani[1];
        $area=$hani[2];

        for($i=0;$i<$tate;$i++){
                $masu[$i]=explode(" ",str_replace(" \r\n","",fgets(STDIN)));
        }
        $sum = 0;
        for($k=0;$k<$area;$k++){
                $an=explode(" ",str_replace(" \r\n","",fgets(STDIN)));
                for($i=$an[0];$i<$an[2]+1;$i++){//このループ条件変更により成功
                        for($j=$an[1];$j<$an[3]+1;$j++){
                                $sum += $masu[$j-1][$i-1];
                                $masu[$j-1][$i-1] = 0;
                        }
                }
        }
        echo $sum."\n";

?>
