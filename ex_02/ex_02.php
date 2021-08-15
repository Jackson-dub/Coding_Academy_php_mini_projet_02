<?php
function my_create_map(){
  
    $dataKey = [];
    $dataValue = [];
    $args = func_get_args();

    
    foreach($args as $array){
    if(! is_array($array)){

        echo "the given parameters aren't valid".PHP_EOL;
        return NULL;

    }
    else{
         
        $key = $array[0];
        $value = $array[1];
    
        array_push($dataKey,$key);
        array_push($dataValue,$value);
        
    }
            
    };

    $my_map = array_combine($dataKey,$dataValue);
    return $my_map;
    
};
