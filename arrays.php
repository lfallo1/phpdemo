<?php
//arrays
$a1 = array(1,2,3,4,5,6,7,8,9, '10');
array_push($a1, 11); //add item
$a1[] = 12; //add item - create array if doesn't exist
$a1['dog'] = 'this is a dog'; //now this elements key would be 'dog' instead of a numeric idx
echo "size: " . sizeof($a1) . "\n";
unset($a1[0], $a1['dog']);
echo "size: " . sizeof($a1) . "\n\n";
if(in_array(3, $a1)){
    echo "yes, value is in the array \n\n";
}
if(in_array(10, $a1, true)){
    echo "yes, value is in the array \n\n";
} else{
    echo "no 10 is not in array when checking strict\n\n";
}
foreach ($a1 as $value) {
    echo $value . " ";
}
echo "\n\n";
//print($a1[0]);

//assoc arrays (preceding array with (object) casts to object)
$assoc_arr = array('fname'=>'lance', 'lname'=>'fallon', 'age'=>30);
asort($assoc_arr); //sort assoc array by values, & preserver key (ksort sorts by key)
print_r($assoc_arr);
echo $assoc_arr['fname'] . "\n\n";

if(array_key_exists('fname', $assoc_arr)){
    echo "yes, the key 'fname' is in the array \n\n";
}

$obj = (object) array('name' => '', 'id'=>0);

//create an array of associative arrays
$heroes =array(
    array('name'=>'lance', 'alias'=>'Captain Justice', 'power'=>25000),
    array('name'=>'kara', 'alias'=>'Wondergal', 'power'=>14000)
);

foreach($heroes as $hero){
    echo "Name " . $hero['name'] . "\n";
    echo "Alias: " . $hero['alias'] . "\n";
    echo "Power Level: " . $hero['power'] . "\n\n";
}


$num_array = array(8,5,2,9,4,9,3,77,1);

//sort using built-in sort
//if(!sort($num_array)){
//    echo "Error sorting\n\n";
//}

//bubble sort
for ($i = 0; $i < count($num_array)-1; $i++) {
    for($j = $i+1; $j < count($num_array); $j++){
        
        //perform comparision
        if($num_array[$i] > $num_array[$j]){
            //if true, then swap
            $temp = $num_array[$j];
            $num_array[$j] = $num_array[$i];
            $num_array[$i] = $temp;
        }
    }
}
print_r($num_array);
