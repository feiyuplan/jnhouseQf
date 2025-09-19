<?php

namespace Feiyuplan\Jnhouse\Kernel\Until;
use Predis\Client;
class RedisCache
{
    public $client;
    public function __construct(){
        if(function_exists("env")&&env("REDIS_HOST_QIAO")){
            $this->client = new Client([
                'scheme' => 'tcp',
                'host'   => env("REDIS_HOST_QIAO"),
                'port'   => env("REDIS_PORT_QIAO"),
                'password'   => env("REDIS_PASSWORD_QIAO")
            ]);
        }else if(function_exists("env")&&env("REDIS_HOST")){
            $this->client = new Client([
                'scheme' => 'tcp',
                'host'   => env("REDIS_HOST"),
                'port'   => env("REDIS_PORT"),
                'password'   => env("REDIS_PASSWORD")
            ]);
        }else{
            EnvCache::init();
            $this->client = new Client([
                'scheme' => 'tcp',
                'host'   => EnvCache::get("REDIS_HOST_QIAO","127.0.0.1"),
                'port'   => EnvCache::get("REDIS_PORT_QIAO","6379"),
                'password'   => EnvCache::get("REDIS_PASSWORD_QIAO",null)
            ]);
        }
    }
    public function get($name){
        return $this->client->get($name);
    }
    public function set($name,$value){
        return $this->client->set($name,$value);
    }
    public function setex($name,$value,$time=3600){
        return $this->client->setex($name,$time,$value);
    }


}