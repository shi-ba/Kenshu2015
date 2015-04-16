<?php
    $maisu = fgets(STDIN);
    $point=0;
    for($i=0;$i<$maisu;$i++){
        $receipt[$i]=fgets(STDIN);
    }
    
    for($i=0;$i<$maisu;$i++){
        $nums=explode(" ",$receipt[$i]);
        if($nums[0]=='3'||$nums[0]=='13'||$nums[0]=='23'||$nums[0]=='30'||$nums[0]=='31'){
            $point+=floor($nums[1]/100*3);
        }else if($nums[0]=='5'||$nums[0]=='15'||$nums[0]=='25'){
            $point+=floor($nums[1]/100*5);
        }else{
            $point+=floor($nums[1]/100);
        }
    }
    echo $point;
?>
