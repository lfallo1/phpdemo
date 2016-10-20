<?php
require_once("calc.php");
//include(TEMPLATE_FRONT . DS . "header.php");

//simple func calls / with constant
$num1 = 14894;
define('TAX', 0.05);

calculatePrice($num1, TAX, $res);
$display = '';
if(is_numeric($res)){
    $display = $res;
} else{
    $display = $res->error . ', ' . $res->code;
}
var_dump($display);

//variable functions
$var_function = '';
if($num1 % 2 == 0){
    $var_function = 'checkout_as_user';
} else{
    $var_function = 'checkout_as_guest';
}
var_dump($var_function());