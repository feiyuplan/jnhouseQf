<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Feiyuplan\Jnhouse\Kernel;

use Pimple\Container;
use Feiyuplan\Jnhouse\Kernel\Exceptions\Exception;

/**
 * Class ServiceContainer.
 *
 * @author overtrue <i@overtrue.me>
 *
 * @property \EasyWeChat\Kernel\Config                          $config
 * @property \Symfony\Component\HttpFoundation\Request          $request
 * @property \GuzzleHttp\Client                                 $http_client
 * @property \Monolog\Logger                                    $logger
 * @property \Symfony\Component\EventDispatcher\EventDispatcher $events
 */
class ServiceContainer extends Container
{

    public $config=[];
    public $sign;
    public $url="https://qfopenapi.qiaofangyun.com/api/jediopenplatformopenapi";
    public $form_params=[];
    public $access_token;
    public function __construct($options)
    {
        parent::__construct($options);
    }
    public function setConfig(array $config){
        $this->config=$config;
        return $this;
    }
    public function getConfig(){
        return $this->config;
    }
    public function getTicketSignature($accessToken=null){
        if($accessToken){
            return sha1($accessToken."|".$this->form_params["timeStamp"]."|".$this->config["AppSecret"]);
        }
        if(!isset($this->config["Appid"])){
            throw new Exception("Appid");
        }
        return sha1($this->config["Appid"]."|".$this->form_params["timeStamp"]."|".$this->config["AppSecret"]);
    }
    public function getUrl($uri){
        return $this->url.$uri;
    }
    public function setForm($form_params){
        $this->form_params=$form_params;
    }
    public function getForm(){
        return $this->form_params;
    }

}
