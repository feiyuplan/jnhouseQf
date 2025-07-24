<?php

namespace Feiyuplan\Jnhouse\Hourse\Employee;
use Feiyuplan\Jnhouse\Kernel\BaseClient;
use Feiyuplan\Jnhouse\Kernel\ServiceContainer;
use Feiyuplan\Jnhouse\Kernel\BaseHourse;
/**
 * Customer Client
 *
 * @author feiyu <315061897@qq.com>
 */
class Client extends BaseHourse
{

    public function __construct(ServiceContainer $app)
    {
        parent::__construct($app);
    }

    /**
     * 查询全部员工
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \Feiyuplan\Jnhouse\Kernel\Exceptions\Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listEmployeeByUuids($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/employee/listEmployeeByUuids","/api/marketingopenapi"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
    /**
     * 查询有效员工
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \Feiyuplan\Jnhouse\Kernel\Exceptions\Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listValidEmployeeByUuids($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/employee/listValidEmployeeByUuids","/api/marketingopenapi"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
}
