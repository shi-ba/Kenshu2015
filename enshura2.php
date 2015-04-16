<?php
    $days = fgets(STDIN);
    for($i=0;$i<$days;$i++){
        $uri[$i]=fgets(STDIN);
    }
    for($i=0;$i<$days;$i++){
        if($i%7==0){
            $youbi[0]+=$uri[$i];
        }else if($i%7==1){
            $youbi[1]+=$uri[$i];
        }else if($i%7==2){
            $youbi[2]+=$uri[$i];
        }else if($i%7==3){
            $youbi[3]+=$uri[$i];
        }else if($i%7==4){
            $youbi[4]+=$uri[$i];
        }else if($i%7==5){
            $youbi[5]+=$uri[$i];
        }else if($i%7==6){
            $youbi[6]+=$uri[$i];
        }
    }
    for($i=0;$i<7;$i++){
        echo $youbi[$i]."\n";
    }
?>
