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


use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LogLevel;
use GuzzleHttp\Client;

/**
 * Class BaseClient.
 *
 * @author overtrue <i@overtrue.me>
 */
class BaseClient
{


    /**
     * @var \EasyWeChat\Kernel\ServiceContainer
     */
    protected $Client;

    /**
     * BaseClient constructor.
     *
     * @param \EasyWeChat\Kernel\ServiceContainer                    $app
     * @param \EasyWeChat\Kernel\Contracts\AccessTokenInterface|null $accessToken
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
     * @return \Psr\Http\Message\ResponseInterface|\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
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
     * @return \Psr\Http\Message\ResponseInterface|\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
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
