<?php
function my_division_modulo($param1,$param2,$param3){

    if((is_numeric($param1) && ($param1 > 0 )) && (is_numeric($param3) && ($param3 > 0)) && ($param2 == '/' || $param2 == '%')){

            if($param2 == '/'){
                return $param1 / $param3;
            }
            else{
                return $param1 % $param3;
            }
       
    }
    else{
        throw new Exception("The given arguments aren't good.".PHP_EOL);
    }

}
