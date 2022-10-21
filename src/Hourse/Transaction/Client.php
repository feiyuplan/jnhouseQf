<?php

namespace Feiyuplan\Jnhouse\Hourse\Transaction;
use Feiyuplan\Jnhouse\Kernel\BaseClient;
use Feiyuplan\Jnhouse\Kernel\ServiceContainer;
use GuzzleHttp\Client as httpClient;
use Feiyuplan\Jnhouse\Hourse\Auth\AccessToken;
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
    public function searchUserList($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpGet($this->app->getUrl("/organization/department/getAllDepartment"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        print_r($response);exit;
    }
}
