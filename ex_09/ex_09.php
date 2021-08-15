<?php

function fitValues($maxValue, &$args, &$posibilities) {

    if (array_sum($posibilities) == $maxValue){

        return true;

    }elseif ((count($args) > 0) && array_sum($posibilities) + $args[0] <= $maxValue) {

        $posibilities[] = array_shift($args);
       

        if (fitValues($maxValue, $args, $posibilities)) 
            
            return true;

        else array_unshift($args, array_pop($posibilities));
    }

    if (count($args) > 1) {

        $tmp = array_shift($args);

        if (fitValues($maxValue, $args, $posibilities)) 
        
            return true;

        else array_unshift($args, $tmp);

    }

    return false;

}


 function check_array_sum($args) {


     $maxValue = max($args);

     $posibilities = [];

     return (fitValues($maxValue, $args, $posibilities));

 }

// $args = [45,25,89,63,52,45];

// check_array_sum($args);