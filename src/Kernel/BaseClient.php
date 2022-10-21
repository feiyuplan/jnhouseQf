<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) feiyu <315061897@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Feiyuplan\Jnhouse\Kernel;


use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Client;

/**
 * Class BaseClient.
 *
 * @author feiyu <315061897@qq.com>
 */
class BaseClient
{


    /**
     * @var \Feiyuplan\Jnhouse\Kernel\ServiceContainer
     */
    protected $Client;

    /**
     * BaseClient constructor.
     *
     * @param \Feiyuplan\Jnhouse\Kernel\ServiceContainer                    $app
     * @param \Feiyuplan\Jnhouse\Kernel\Contracts\AccessTokenInterface|null $accessToken
     */
    public function __construct()
    {
        $this->Client = new Client();

    }

    /**
     * GET request.
     *
     * @param string $url
     * @param array  $query
     *
     * @return \Psr\Http\Message\ResponseInterface|\Feiyuplan\Jnhouse\Kernel\Support\Collection|array|object|string
     *
     * @throws \Feiyuplan\Jnhouse\Kernel\Exceptions\Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function httpGet(string $url, array $query = [])
    {
        $response=(new Client())->request('get',$url, [
            'query' => $query["query"],
            'headers'=>$query["headers"]
        ]);
        $body = $response->getBody();//获取相应体
        $html = $body->getContents();//获取目标页面
        $html=json_decode($html);
        return $html;
    }

    /**
     * POST request.
     *
     * @param string $url
     * @param array  $data
     *
     * @return \Psr\Http\Message\ResponseInterface|\Feiyuplan\Jnhouse\Kernel\Support\Collection|array|object|string
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function httpPost(string $url, array $query = [])
    {
        $response=(new Client())->request('post',$url, [
            'json' =>$query["query"],
            'headers'=>$query["headers"]
        ]);
        $body = $response->getBody();//获取相应体
        $html = $body->getContents();//获取目标页面
        $html=json_decode($html);
        return $html;
    }


}
