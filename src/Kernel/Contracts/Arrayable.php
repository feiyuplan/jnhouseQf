<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) feiyu <315061897@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Feiyuplan\Jnhouse\Kernel\Contracts;

use ArrayAccess;

/**
 * Interface Arrayable.
 *
 * @author feiyu <315061897@qq.com>
 */
interface Arrayable extends ArrayAccess
{
    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray();
}
