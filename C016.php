<?php
	//C016問題 全パス
	//柴田和樹、中野大輝
    $input_lines = fgets(STDIN);
    $alph=str_split($input_lines);
    for($i=0;$i<strlen($input_lines);$i++){
        if($alph[$i]==="A"){
            $alph[$i]="4";
        }else if($alph[$i]==="E"){
            $alph[$i]="3";
        }else if($alph[$i]==="G"){
            $alph[$i]="6";
        }else if($alph[$i]==="I"){
            $alph[$i]="1";
        }else if($alph[$i]==="O"){
            $alph[$i]="0";
        }else if($alph[$i]==="S"){
            $alph[$i]="5";
        }else if($alph[$i]==="Z"){
            $alph[$i]="2";
        }
        echo $alph[$i];
    }
    echo "\n";
?>
