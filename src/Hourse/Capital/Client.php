<?php

namespace Feiyuplan\Jnhouse\Hourse\Capital;
use Feiyuplan\Jnhouse\Kernel\BaseClient;
use Feiyuplan\Jnhouse\Kernel\ServiceContainer;
use Feiyuplan\Jnhouse\Kernel\BaseHourse;
/**
 * Capital Client
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
     * 新增收款
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addCapitalReceiveRecord($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/capital/addCapitalReceiveRecord"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 编辑收款
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateCapitalReceiveRecord($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/capital/updateCapitalReceiveRecord"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 查询实收记录
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryReceiveCapitalRecord($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/capital/queryReceiveCapitalRecord"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 新增付款
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addCapitalPayRecord($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/capital/addCapitalPayRecord"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 编辑付款
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateCapitalPayRecord($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/capital/updateCapitalPayRecord"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
    /**
     * 查实付记录
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryPayCapitalRecord($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/capital/queryPayCapitalRecord"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 上传图片
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function uploadPic($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/capital/uploadPic"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }


}
