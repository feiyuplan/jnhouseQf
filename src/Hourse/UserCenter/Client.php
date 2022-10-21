<?php

namespace Feiyuplan\Jnhouse\Hourse\UserCenter;
use Feiyuplan\Jnhouse\Kernel\BaseClient;
use Feiyuplan\Jnhouse\Kernel\ServiceContainer;
use Feiyuplan\Jnhouse\Kernel\BaseHourse;
/**
 * Media Client
 *
 * @author moniang <me@imoniang.com>
 */
class Client extends BaseHourse
{

    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
        $this->app->access_token=$this->app->AccessToken()->getToken();
    }

    /**
     * 员工列表查询
     * @param $params
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function searchUserList($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/organization/usercenter/searchUserList"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
}
