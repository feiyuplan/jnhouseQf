<?php

namespace Feiyuplan\Jnhouse\Hourse\Transaction;
use Feiyuplan\Jnhouse\Kernel\BaseClient;
use Feiyuplan\Jnhouse\Kernel\ServiceContainer;
use GuzzleHttp\Client as httpClient;
use Feiyuplan\Jnhouse\Hourse\Auth\AccessToken;
use Feiyuplan\Jnhouse\Kernel\BaseHourse;
/**
 * Transaction Client
 *
 * @author feiyu <315061897@qq.com>
 */
class Client extends BaseHourse
{

    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
        $this->app->access_token=$this->app->AccessToken()->getToken();
    }

    /**
     * 查询业绩分成列表
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAchievementDistributionList($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/achievement/getAchievementDistributionList"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 搜索交易列表
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function searchTransaction($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/subscription/searchTransaction"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 根据交易uuid查询交易信息
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTransactionByTransactionUuid($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/subscription/getTransactionByTransactionUuid"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 查询交易分成接口列表
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function searchShareTransaction($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/subscription/searchShareTransaction"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 搜索交易阶段
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function searchPhase($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/subscription/searchPhase"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
}
