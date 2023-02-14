<?php

$foods = [
    'vegetables' => explode(', ', 'brinjal, brocolli, carrot, capsicam'),
    'fruits' => explode(', ', 'orange, banana, apple'),
    'drinks' => explode(', ', 'water, milk')
];

// print_r($foods);


array_push($foods['drinks'], 'orange juice');

// print_r($foods);

// echo $foods['vegetables'][3];

$sample = [
    'test' => [
        'test-again' => [
            'a',
            'b',
            'c',
            'd'
        ]
    ],
];


echo $sample['test']['test-again'][2];
