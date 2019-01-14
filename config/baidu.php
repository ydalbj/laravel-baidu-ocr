<?php

return [
    'ocr' => [
        'auth' => [
            'id' => env('BAIDU_APP_ID'),
            'key' => env('BAIDU_APP_KEY'),
            'secret' => env('BAIDU_APP_SECRET'),
            'file_path' => storage_path('app/ocr'),
        ],
    ],
];
