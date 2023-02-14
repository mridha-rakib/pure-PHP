<?php

$students = [
    "rakib",
    "shakil",
    "Sourav",
    "Fahim",
    123,
    "Iram"
];

$n = sizeof($students);

// for( $i = 0; $i < $n; $i++ ){
//     print ($students[$i].' ');
// }

// for( $i = 0; $i < count($students); $i++ )
// {
//     echo $students[$i]."\n";
// }

//--------------array------elements delete from front and end-----pop----------

$student = array_pop( $students );
$student = array_shift( $students );

foreach ( $students as $student )
    echo $student."\n";

//-----------------------array elements insert at--elements---------

$students[] = "Sami";
array_push($students, 'Kawsar');
print_r( $students );

array_unshift($students, 'Osman');
print_r( $students );



?>