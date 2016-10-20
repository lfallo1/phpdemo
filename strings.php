<?php

function send_mail($sender, $recipient, $message){
    return 
<<<MAIL
Hi $sender,
    You have received a message from $recipient
    ---------------------------------------
    $message
    
    You can respond to this message by hitting reply.
MAIL;
}

//var_dump(send_mail('lance', 'bill', 'Hey Lance, just seein wats up! hope to here back!!'));

$raw = "Once upon a time there lived a time and one mored timer";

//$res = strpos($raw, 'zzz');

$curr = 0;
while(($loc = strpos($raw,'time',$curr))){
    echo "$loc ";
    $curr = $loc + 1;
}

$replaced = str_replace('time', 'tree', $raw, $count);
echo <<<DEL

$replaced
Performed $count replacements
        
DEL;


//parse into object example
$str = "www.youtube.com/doghouse?name=wilfred&id=89";
$query_string = str_split($str, strpos($str,'?')+1);
$values = explode('&', $query_string[1]);

$animal = (object)[];
//alternate obj declaration: $obj = (object) array('name' => '', 'id'=>0);
//dummy value declarations:  $animal->{'name'} = 'harry'; $animal->{'id'} = 99;
foreach ($values as $value) {
    $obj = explode('=', $value);
    $animal->$obj[0]=$obj[1];
}
echo 'name: ' . $animal->{'name'};
echo ', id: ' . $animal->{'id'};
