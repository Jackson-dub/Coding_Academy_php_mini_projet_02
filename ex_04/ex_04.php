<?php
function my_password_hash($password){
    
    $salt = str_shuffle("Oauth".random_int(11,9999));
    $passArray = ["hash" => md5($password.$salt), "salt" => $salt];
    return $passArray;

}


function my_password_verify($passWordText,$salt,$hashedPassword){

        $pass = md5($passWordText.$salt);
        $hash = $hashedPassword;

   if ($pass == $hash){
     return "true";
   }else{
    return "false";
   }
  
}
