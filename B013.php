<?php
//B013 最遅出社時刻
//テストケース全パス
//柴田和樹 中野大輝
$times = explode( " ", fgets( STDIN ) );
$hon = fgets( STDIN );
for($i = 0; $i < $hon; $i++){
    $jikoku[$i] = explode( " ", fgets( STDIN ) );
}
$ok = 0;
for($i = 0; $i < $hon; $i++){
    $eki = $jikoku[$i][0] * 60 + $jikoku[$i][1];
    $minute = $eki;
    $minute += $times[1];
    $minute += $times[2];
    if( $minute < 540){
        $ok = $eki - $times[0];
    } else {
        break;
    }
}
printf( "%02d:%02d\n", floor( $ok / 60 ), $ok % 60 );