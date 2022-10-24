<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) feiyu <315061897@qq.com>
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
    public function Position(): \Feiyuplan\Jnhouse\Hourse\Position\Client
    {
        return new \Feiyuplan\Jnhouse\Hourse\Position\Client($this);
    }
    public function Commonhouse(): \Feiyuplan\Jnhouse\Hourse\Commonhouse\Client
    {
        return new \Feiyuplan\Jnhouse\Hourse\Commonhouse\Client($this);
    }
    public function Department(): \Feiyuplan\Jnhouse\Hourse\Department\Client
    {
        return new \Feiyuplan\Jnhouse\Hourse\Department\Client($this);
    }

}
