<?php
//B010 オフサイド判定
//テストケース全パス
//値取得、出力方法を見直します
//柴田和樹、中野大輝
$pas = str_replace("\n","",explode(" ",fgets(STDIN)));
$TA = str_replace("\n","",explode(" ",fgets(STDIN)));
$TB = str_replace("\n","",explode(" ",fgets(STDIN)));
$ofnum = 0;

if($pas[0] === "A"){
    rsort($TB);

    for($i = 0;$i < count($TA);$i++){
        if($TA[$i] >= 55){
            if($TA[$i] > $TA[$pas[1]-1]){
                if($TA[$i] > $TB[1]){
                    $ofnum = $i + 1;
                    echo $ofnum."\n";
                }
             }
        }
    }
    if($ofnum === 0){
        echo "None\n";
    }
} elseif( $pas[0] === "B" ) {
    sort($TA);

    for($i = 0; $i < count($TB); $i++){
        if($TB[$i] <= 55){
            if($TB[$i] < $TB[$pas[1]-1]){
                if($TB[$i] < $TA[1]){
                    $ofnum = $i + 1;
                    echo $ofnum."\n";
                }
            }
        }
    }
    if($ofnum === 0){
        echo "None\n";
    }
}