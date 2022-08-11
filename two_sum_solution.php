<?php

class Solution {

    public function twoSum($nums, $target) {
        //echo '<pre>';print_r($nums);
        //echo count($nums);
        //$x = 0; $y = 0; $sum = 0; 
        for($i=0; $i < count($nums); $i++){
            //echo $i.'wwwwwwwww<br/>';
            for($j=0; $j<$i; $j++){
                //echo 'mb'.'<br/>';
                //echo $i.'iii<br/>';
                //echo $j.'aaaaaaaaaa<br/>';
                
                if(($nums[$i] + $nums[$j]) == $target){
                    return $output = [$j,$i];
                }
                //else{
                  //  return $output = [];
                //}
                
            }

        } //end main for
        
        //return $output;
    } //end function
    
}
    $nums   = [3,3]; //array(2,7,11,15); 
    $target = 6;

    $obj = new Solution();
    $result = $obj->twoSum($nums,$target);
    echo '<pre>';print_r($result);
    // x+y = 9, x = 9-y, y = 9-x

?>
