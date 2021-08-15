<?php

$array = [];

function my_add_elem_map(){

    $args = func_get_args();

    $arrayToAdd = array($args[0] => $args[1]); 

    $array = $args[2];
    
    $array = array_merge($array,$arrayToAdd);

    return $array;

}


function my_modify_elem_map(){

    $args = func_get_args();

    $keyToModify = $args[0];
    
    $array = $args[2];

    foreach(array_keys($array) as $key){

        if($key === $keyToModify){

            $array[$key] = $args[1];
        }

    };

    return $array;

}



function my_delete_elem_map(){

    $args = func_get_args();

    $keyToModify = $args[0];
    
    $array = $args[1];

    foreach(array_keys($array) as $key){

        if($key === $keyToModify){

           unset($array[$key]);
        }

    };

    return $array;
}


function my_is_elem_valid(){

    $args = func_get_args();

    $valueToVerify = $args[1];
    
    $array = $args[2];

    foreach($array as $key => $value){

        if($valueToVerify === $value){

           return "true";
        }
        else{

            echo 'You have to give good parameters'.PHP_EOL;
            return "false";
             
        }

    };
 

}


