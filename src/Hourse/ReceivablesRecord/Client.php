<?php

namespace Feiyuplan\Jnhouse\Hourse\ReceivablesRecord;
use Feiyuplan\Jnhouse\Kernel\BaseClient;
use Feiyuplan\Jnhouse\Kernel\ServiceContainer;
use Feiyuplan\Jnhouse\Kernel\BaseHourse;
/**
 * ReceivablesRecord Client
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
     * 添加应收记录
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addReceivablesRecord($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/receivablesRecord/addReceivablesRecord"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
    /**
     * 更新应收记录【不能更新其他枚举，应付/坏账】
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateReceivablesRecord($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/receivablesRecord/updateReceivablesRecord"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
    /**
     * 删除应收
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteReceivablesRecord($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/receivablesRecord/deleteReceivablesRecord"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 查询应收记录
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryReceivablesRecord($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/receivablesRecord/queryReceivablesRecord"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 新增应收V2 新加接口
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addReceivablesRecordV2($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/receivablesRecord/addReceivablesRecordV2"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 编辑应收V2 新加接口
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateReceivablesRecordV2($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/receivablesRecord/updateReceivablesRecordV2"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
    /**
     * 查询应收实收
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listReceivablesRecordByTransactionUuids($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/transaction/receivablesRecord/listReceivablesRecordByTransactionUuids"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }


}
