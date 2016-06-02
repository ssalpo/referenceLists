<?php

return [
    'name' => 'Специальности',
    'page' => [
        'index' => 'Список специальностей'
    ],
    'table' => [
        'name' => 'Название',
        'actions' => 'Действия'
    ],
    'form' => [
        'name' => [
            'label' => 'Название',
            'placeholder' => 'Введите название специальности'
        ],
        'department' => [
            'label' => 'Кафедра',
        ]
    ],
    'alerts' => [
        'success' => [
            'updated' => "Специальность <b>':specialization'</b> успешно изменена!",
            'created' => "Специальность <b>':specialization'</b> успешно создана!",
            'deleted' => "Специальность удалена!",
        ]
    ]
];
