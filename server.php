<?php

$data = [
    'draw' => 1,
    'recordsTotal' => 2,
    'recordsFiltered' => 2,
    'data' => [ 
        [       
            "Q",
            "q@example.com",
            40
        ],
        [       
            "R",
            "r@example.com",
            41
        ]       
    ]
];

echo json_encode($data);
