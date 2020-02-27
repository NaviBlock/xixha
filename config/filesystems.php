<?php
return [
    'default' => 'local',
    'cloud' => 's3',
    'disks' => [
        'local' => [
            'driver' => 'local',
            //'root' => storage_path('app'),
            'root' => public_path(),
        ],
        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'visibility' => 'public',
        ],
        'local'=>[
            'drive'=>'local',
            'root'=>public_path().'/storage',
        ],
        'perfil' =>[
            'driver' => 'local',
            'root'   => storage_path('perfil'),
        ],
        'ftp' => [
            'driver'   => 'ftp',
            'host'     => 'ftp.example.com',
            'username' => 'your-username',
            'password' => 'your-password',
        ],
    ],
];