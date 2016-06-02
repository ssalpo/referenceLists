<?php

return [
    'name' => 'Specializations',
    'page' => [
        'index' => 'Specializations list'
    ],
    'table' => [
        'name' => 'Name',
        'actions' => 'Actions'
    ],
    'form' => [
        'name' => [
            'label' => 'Name',
            'placeholder' => 'Enter specialization name'
        ],
        'department' => [
            'label' => 'Department',
        ]
    ],
    'alerts' => [
        'success' => [
            'updated' => "Specialization <b>':specialization'</b> has been updated!",
            'created' => "Specialization <b>':specialization'</b> has been created!",
            'deleted' => "Specialization has been deleted!",
        ]
    ]
];
