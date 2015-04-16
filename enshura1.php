<?php
    $input_lines = fgets(STDIN);
    $alph=str_split($input_lines);
    for($i=0;$i<strlen($input_lines);$i++){
        if($i%2==0){
            echo $alph[$i];
        }
    }
?>
