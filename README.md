<?php

use Feiyuplan\Jnhouse\Factory;

require "../vendor/autoload.php";
$options = [
    'Appid' => '',
    'AppSecret' => '',
    'companyUuid' => '',
    'x_client' => 'server',
    'log' => [
        'level' => 'debug',
        'file' => '/tmp/easywechat.log',
    ],
];
$param = [
    "param" => [
        "page" => [
            "pageNum" => 1,
            "pageSize" => 50
        ],
        "grade"=>1
    ]
];
$app = Factory::Hourse($options);
//$getToken=$app->AccessToken()->getToken();
print_r($app->Transaction()->searchUserList($param));
exit;