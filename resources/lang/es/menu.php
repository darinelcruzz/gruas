<?php
return [
    'entries' => [
        'title' => 'Entradas',
        'icon' => 'fa fa-truck',
        'submenu' => [
            'create' => [
                'title' => 'Crear',
                'route' => 'entries.create'
            ],
            'history' => [
                'title' => 'Historial',
                'route' => 'entries.show'
            ],
        ]
    ],
];
