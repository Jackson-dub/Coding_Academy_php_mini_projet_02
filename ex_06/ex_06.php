<?php

$map = [];
function my_create_continent($arg1,&$arg2){
    //$args = func_get_args();

    $newContinent = array($arg1 => []);

    $arg2 = array_merge($arg2,$newContinent);
 

}


function my_create_country($arg1,$arg2,&$arg3){


    $newCountry = array($arg1 => []);
  
    foreach(array_keys($arg3) as $key){

        if($key === $arg2){

            $arg3[$key] = array_merge($arg3[$key],$newCountry);
        }
    
}

}


function my_create_city($arg1,$arg2,$arg3,$arg4,&$arg5){

    $newCity = array($arg1 => $arg2);
    $continentToAddto = $arg5[$arg4];

    foreach(array_keys($continentToAddto) as $key){

        if($key === $arg3){
           $arg5[$arg4][$key] = array_merge($continentToAddto[$key],$newCity);
        
        }
    
}
}



function my_get_countries_of_continent(){

    $args = func_get_args();

    $continentToRetrieve = $args[0];
    $map = $args[1];

    foreach(array_keys($map) as $key){

        if($key === $continentToRetrieve){
           return array_keys($map[$continentToRetrieve]);
        }
        else{
            echo "Failure to get continent".PHP_EOL;
            return NULL;
        }

        
}
}



function my_get_cities_of_country(){

    $args = func_get_args();

    $countryToRetrieve = $args[0];
    $map = $args[2];
    $continentToSearch = $map[$args[1]];
  
    foreach(array_keys($continentToSearch) as $key){

        if($key === $countryToRetrieve){
           return array_keys($continentToSearch[$key]);
        }
        else{
            echo "Failure to get country".PHP_EOL;
            return NULL;
        }

        
}
}



function my_get_city_postal_code(){

    $args = func_get_args();

    $map = $args[3];
    $continentToSearch = $map[$args[2]];
    $countryToSearch = $continentToSearch[$args[1]];
    $cityToSearch = $args[0];
    
    
    foreach(array_keys($countryToSearch) as $key){


        if($key === $cityToSearch){
           return $countryToSearch[$cityToSearch];
           
        }
        else{
            echo "Failure to get city".PHP_EOL;
            return NULL;
        }

        
}
}
