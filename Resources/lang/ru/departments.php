<?php

return [
    'name' => 'Кафедры',
    'page' => [
        'index' => 'Список кафедр'
    ],
    'table' => [
        'name' => 'Название',
        'actions' => 'Действия'
    ],
    'form' => [
        'name' => [
            'label' => 'Название',
            'placeholder' => 'Введите название кафедры'
        ]
    ],
    'alerts' => [
        'success' => [
            'updated' => "Кафедра <b>':department'</b> успешно изменена!",
            'created' => "Кафедра <b>':department'</b> успешно создана!",
            'deleted' => "Кафедра удалена!",
        ]
    ]
];
