<?php
//C005問題 全パス
//修正分をGithub上に反映し忘れていました。申し訳ありませんでした。
//柴田和樹、中野大輝
$sou = fgets(STDIN);
for($i=0;$i<$sou;$i++){
        $ip[$i] = fgets(STDIN);
}
for($i=0;$i<$sou;$i++){
        $ok = 0;
        $suti = explode(".",$ip[$i]); //explode by dot
        if(count($suti) == 4){
                for($j=0;$j<4;$j++){
                        if(is_numeric($suti[$j])){
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