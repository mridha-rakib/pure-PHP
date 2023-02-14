<?php

$student = array(
    'fname'=> 'Rakib',
    'lname' => 'Mahmud',
    'age' => '22',
    'class' => 13,
    'section' => 'B',
);

// print_r( $student );

// echo $student['fname']." ".$student['lname']."\n";

///string convert

// echo join( ",", $student);// evabe para jabe na

// echo serialize( $student );

// $serialized = serialize($student);

// print_r( $serialized );

// $newstudent = unserialize( $serialized );

// print_r( $newstudent );


$jsondata = json_encode( $student );

// print_r( $jsondata );

// echo $jsondata;

$student2 = json_decode( $jsondata, true );// here, 'true'=> treating as an array.

print_r( $student2 );