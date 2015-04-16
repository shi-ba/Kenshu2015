<?php
	//C017問題 全パス
	//柴田和樹、中野大輝
    $oya = fgets(STDIN);
    $sou = fgets(STDIN);

    $pn = explode(" ",$oya);

    for($i=0;$i<$sou;$i++){
        $ko[$i] = fgets(STDIN);
       // $cn = explode(" ",$ko[$i]);
    }

    for($i=0;$i<$sou;$i++){
        $cn = explode(" ",$ko[$i]);
        if($pn[0] == $cn[0]){
                if($pn[1] < $cn[1] ){
                        echo "High\n";
                }else{
                        echo "Low\n";
                }
        }else{
                if($pn[0] > $cn[0]){
                        echo "High\n";
                }else{
                        echo "Low\n";
                }
        }
    }
?>
