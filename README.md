# 58巧房2.0开放平台Jnhouse
58巧房V20开放平台，支持将房源、客源、交易等数据通过标准接口形式开放给第三方合作伙伴，帮助第三方合作伙伴创建更具竞争力的应用。

通过接入58巧房V20开放平台，可完成定制功能开发，以便更贴切业务场景；同时可实现标准业务数据与三方系统对接，例如进行线索导入、房源发布、财务及协同软件对接等更多常用业务场景，最终实现“降低运营成本、完善服务体验、提升最终收益”的目标。
##依赖环境
1. PHP 7.0.0 版本及以上
## 通过 Composer 安装
通过 Composer 获取安装是使用 PHP SDK 的推荐方法，Composer 是 PHP 的依赖管理工具，支持您项目所需的依赖项，并将其安装到项目中。关于 Composer 详细可参考 Composer 官网 。
1. 安装Composer：
   windows环境请访问[Composer官网](https://getcomposer.org/download/)下载安装包安装。

   unix环境在命令行中执行以下命令安装。
   > curl -sS https://getcomposer.org/installer | php

   > sudo mv composer.phar /usr/local/bin/composer
2. 建议中国大陆地区的用户设置腾讯云镜像源：`composer config -g repos.packagist composer https://mirrors.tencent.com/composer/`
3. 执行命令 `composer require feiyuplan/jnhouse` 添加依赖。
4. 在代码中添加以下引用代码。注意：如下仅为示例，composer 会在项目根目录下生成 vendor 目录，`/path/to/`为项目根目录的实际绝对路径，如果是在当前目录执行，可以省略绝对路径。

   > require '/path/to/vendor/autoload.php';


##文档
API文档[58巧房开放平台](https://kfpt.qiaofangyun.com/doc/devillustrate/devillustrate.html) 
##示例
```php
<?php
use Feiyuplan\Jnhouse\Factory;
$options = [
    'Appid' => '',
    'AppSecret' => '',
    'companyUuid' => '',
    'x_client' => 'server',
    'log' => [
        'level' => 'debug',
        'file' => '/tmp/easy.log',
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
```
##发布到github
```
git tag "v2.0.1"
```
```
git push origin --tags
```