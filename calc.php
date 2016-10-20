<?php

require_once 'constants.php';

//calculate price w/tax. value stored in third parameter (ref var)
function calculatePrice($cost, $tax = 0.07, &$res=null){
    if(is_numeric($cost) && is_numeric($tax)){
        if($cost < 0 || $tax < 0){
            $res = generate_error('ERROR! cost and tax cannot be less than zero', INVALID_INPUT);
        } else{
            $res = $cost + ($cost*$tax);
        }
        return;
    } 
    $res = generate_error('ERROR! cost and tax must be valid numbers',INVALID_INPUT);
}

function checkout_as_user(){
    return 'You are now checking out as a logged in user';
}

function checkout_as_guest(){
    return 'You are now checking out as a guest';
}

function generate_error($msg, $code){
    return (object) [
        'error' => $msg,
        'code' => $code
    ];
}

