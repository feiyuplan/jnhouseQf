<?php

use Feiyuplan\Jnhouse\Factory;

require "../vendor/autoload.php";
$options = [
    'Appid' => '5ecf735dce9b49119c1d8f3b165d411f',
    'AppSecret' => '925dc87b83c542abbea625eb96961e6c',
    'companyUuid' => 'jinanzhongzhufangdic_3_2da87_company3231b59b0',
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
$app = Factory::hourse($options);
//$getToken=$app->AccessToken()->getToken();
print_r($app->Transaction()->searchUserList($param));
exit;