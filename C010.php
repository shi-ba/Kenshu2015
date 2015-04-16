<?php
	//C010問題 全パス
	//柴田和樹、中野大輝
    $genba=explode(" ",fgets(STDIN));
    $sou = fgets(STDIN);
    for($i=0;$i<$sou;$i++){
        $tree[$i]=fgets(STDIN);
    }
    for($i=0;$i<$sou;$i++){
        $zahyo=explode(" ",$tree[$i]);
        if(($zahyo[0]-$genba[0])*($zahyo[0]-$genba[0])+($zahyo[1]-$genba[1])*($zahyo[1]-$genba[1])>=$genba[2]*$genba[2]){
            echo "silent\n";
        }else {
            echo "noisy\n";
        }
    }
?>
