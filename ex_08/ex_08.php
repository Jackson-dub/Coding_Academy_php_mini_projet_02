<?php
function my_order_class_name(...$args){


    $typeOfItem = [];

    foreach ($args as $arg){
        if(gettype($arg)=='object'){
            $className = get_class($arg);
            if(!in_array($className,$typeOfItem)){
                $typeOfItem[] = $className;
            }
            
        }
        else{
            $typeOfItem[] = gettype($arg);
        }

    }

    sort($typeOfItem, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);
    $uniqueTypeOtItem = array_unique($typeOfItem); 

              $transitionArray = array();
              foreach ($uniqueTypeOtItem as $arr){
                $transitionArray[strlen( $arr)][] =  $arr;

              }

    ksort($transitionArray,SORT_NUMERIC);
           
            $final_array = [];
            foreach ($transitionArray as $row){
                $final_array[] = $row;
            }


             return $final_array;

 }



//  class Myclass{

//  }

//   $args = [
//      true,
//      76,
//      false,
//       12.5,
//       "Coucou !",
//       [1,2,3],
//       new Myclass(),
//       NULL
//   ];

//   print_r(my_order_class_name(...$args));
