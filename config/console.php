<?php
// +----------------------------------------------------------------------
// | 控制台配置
// +----------------------------------------------------------------------
return [
    // 指令定义
    'commands' => [
        'admin:reset' => 'app\command\AdminReset',
        'chat' => 'app\command\Chat',
    ],
];
