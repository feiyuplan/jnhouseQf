<?php

namespace Feiyuplan\Jnhouse\Kernel\Until;
use Predis\Client;
class RedisCache
{
    public $client;
    public function __construct(){
        if(function_exists("env")&&env("REDIS_HOST")){
            $this->client = new Client([
                'scheme' => 'tcp',
                'host'   => env("REDIS_HOST"),
                'port'   => env("REDIS_PORT"),
            ]);
        }else{
            EnvCache::init();
            $this->client = new Client([
                'scheme' => 'tcp',
                'host'   => EnvCache::get("REDIS_HOST","127.0.0.1"),
                'port'   => EnvCache::get("REDIS_PORT","127.0.0.1"),
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