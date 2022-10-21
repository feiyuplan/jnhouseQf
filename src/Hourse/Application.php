<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Feiyuplan\Jnhouse\Hourse;
use Feiyuplan\Jnhouse\Kernel\ServiceContainer;

class Application extends ServiceContainer
{

    public function __construct($options)
    {
        parent::__construct($options);
        $this->setConfig($options);
    }

    /**
     * 交易
     * @return Transaction\Client
     */
    public function Transaction(): \Feiyuplan\Jnhouse\Hourse\Transaction\Client
    {
        return new \Feiyuplan\Jnhouse\Hourse\Transaction\Client($this);
    }
    public function AccessToken(): \Feiyuplan\Jnhouse\Hourse\Auth\AccessToken
    {
        return new \Feiyuplan\Jnhouse\Hourse\Auth\AccessToken($this);
    }

    /**
     * 用户
     * @return Transaction\Client
     */
    public function UserCenter(): \Feiyuplan\Jnhouse\Hourse\UserCenter\Client
    {
        return new \Feiyuplan\Jnhouse\Hourse\UserCenter\Client($this);
    }

}
