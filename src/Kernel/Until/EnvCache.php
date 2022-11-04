<?php

namespace Feiyuplan\Jnhouse\Kernel\Until;
use Feiyuplan\Jnhouse\Kernel\Until\Env;
class EnvCache
{
    public static function init(){
        try {
            Env::loadFile('.env');
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }
    public static function get($name,$default=null){
        return Env::get($name,$default);
    }
}