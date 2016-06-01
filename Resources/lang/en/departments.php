<?php

return [
    'topMenuName' => 'Departments',
    'page' => [
        'index' => 'Departments list'
    ],
    'table' => [
        'name' => 'Name',
        'actions' => 'Actions'
    ],
    'form' => [
        'name' => [
            'label' => 'Name',
            'placeholder' => 'Enter department name'
        ]
    ],
    'alerts' => [
        'success' => [
            'updated' => "Department <b>':department'</b> has been updated!",
            'created' => "Department <b>':department'</b> has been created!",
            'deleted' => "Department has been deleted!",
        ]
    ]
];
