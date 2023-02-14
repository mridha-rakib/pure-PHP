<?php

// $students = [
//     '12' => 'Rakib',
//     '13' => 'Rahim',
//     '14' => 'Karim',
//     '16' => 'Shakil',
//     'new' => 'Kurlus',
// ];

// echo $students['new'];
// echo $students['12'];


$food = [
    'vegetables' => 'brinjal, brocolli, carrot, capsicam',
    'fruits' => 'orange, banana, apple',
    'drinks' => 'water, milk'
];

// echo count($food);

// echo $food['vegetables'];

// foreach ( $food as $key => $value )
// {
//     echo $key." = ".$value." \n";
// }

// print_r( $food );


$keys = array_keys( $food );

// print_r($keys);

for( $i = 0; $i < count($keys); $i++ )
{
    $key = $keys[$i];
    echo $food[ $key ]. "\n";
}

$values = array_values( $food );

for( $i = 0; $i < count($values); $i++ )
{
   $value = $values[$i];
   echo $values."\n";
}
