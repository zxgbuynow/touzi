<?php
return [
    // 生成运行时目录
    '__file__' => ['mobile.php'],

    // 定义index模块的自动生成
    'index'    => [
        '__file__'   => ['mobile.php'],
        '__dir__'    => ['controller', 'model', 'view'],
        'controller' => ['Index'],
        'model'      => [],
        'view'       => ['index/index']
    ]
];