<?php
include ('ex_01_2.php');

if(isset($argc)){
    for($i=1;$i<$argc;$i++){
        my_included_putstr($argv[$i]);
    }
}
