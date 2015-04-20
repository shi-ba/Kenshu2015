<?php
//カンファレンスのタイムテーブル作成
//テストケース全パス
//柴田和樹、中野大輝
$n = fgets( STDIN );
$minute = 600;
for($i = 0; $i < $n; $i++){
    $happyo[$i] = explode( " ", fgets( STDIN ));
}
$ohiru = 0;
//array_push($happyo,0);
for($i = 0; $i < $n; $i++){
    printf("%02d:%02d", floor($minute / 60) ,$minute % 60);
    $minute += $happyo[$i][1];
    printf(" - %02d:%02d %s\n", floor($minute / 60) ,$minute % 60, $happyo[$i][0]);
    $minute += 10;
    /*if(isset($happyo[$i + 1])){
        continue;
    } else {
        break;
    }*/
    if($ohiru == 0){
        if($minute + $happyo[$i + 1][1] > 720){
            $minute += 50;

            $ohiru = 1;
        }
    }
}
