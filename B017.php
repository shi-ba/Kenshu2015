<?php
//B017 手役の強さ
//テストケース全パス
//柴田和樹 中野大輝
//$card = str_replace( "\n", "", fgets( STDIN ) );
$cards = fgets(STDIN);
$card = str_split($cards);
$cnt = 0;
$subcnt = array();
for($i = 0; $i < 4; $i++){
    $subcnt[$i] = substr_count($cards,$card[$i]);
    if($cnt < $subcnt[$i]){
    $cnt = $subcnt[$i];
    }
}
for($i = 0; $i < 4; $i++){
    if( $card[$i] === '*' ){
        $cnt++;
    }
}
if($cnt == 1 ){
    echo "NoPair\n";
} else if($cnt == 2){
    $hantei = array_sum($subcnt);
    if($hantei == 8){
        echo "TwoPair\n";
    } else {
        echo "OnePair\n";
    }
} else if($cnt == 3){
    echo "ThreeCard\n";
} else if($cnt == 4){
    echo "FourCard\n";
}