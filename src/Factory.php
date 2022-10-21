<?php

namespace Feiyuplan\Jnhouse;

/**
 * Class Factory.
 *
 * @method static \Feiyuplan\Jnhouse\Hourse\Application   hourse(array $config)
 */
class Factory
{
    /**
     * @param string $name
     * @param array  $config
     *
     * @return \Feiyuplan\Jnhouseqf\Kernel\ServiceContainer
     */
    public static function make($name, array $config=[])
    {
        $namespace = Kernel\Support\Str::studly($name);
        $application = "\\Feiyuplan\\Jnhouse\\{$namespace}\\Application";
        return new $application($config);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }

}