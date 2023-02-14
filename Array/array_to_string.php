<?php

//explode(', '--> Delimeter)
// $vegetables = explode(', ', 'Brinjal, brocolli, carrot, capsicam');

// // var_dump( $vegetables );

// // echo $vegetables[0];

// $vegetables_string = join(', ', $vegetables );
// // echo $vegetables_string;

// echo count($vegetables);

$vegetables = preg_split('/(, |,)/', 'Brinjal, brocolli, carrot, capsicam, potato, sweet-potato, lentil');

print_r( $vegetables );

join(', ', $vegetables);

echo count( $vegetables );
