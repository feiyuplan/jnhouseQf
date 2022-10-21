<?php

namespace Feiyuplan\Jnhouse\Kernel\Until;
use MillionMile\GetEnv\Env as BaseEnv;
class EnvCache
{
    public static function init(){
        try {
            BaseEnv::loadFile('.env');
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }
    public static function get($name,$default=null){
        return BaseEnv::get($name,$default);
    }
}