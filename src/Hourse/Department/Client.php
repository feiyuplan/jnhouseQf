<?php

namespace Feiyuplan\Jnhouse\Hourse\Department;
use Feiyuplan\Jnhouse\Kernel\BaseClient;
use Feiyuplan\Jnhouse\Kernel\ServiceContainer;
use Feiyuplan\Jnhouse\Kernel\BaseHourse;
/**
 * Department Client
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
     * 获取所有部门
     * @param $params
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAllDepartment($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpGet($this->app->getUrl("/organization/department/getAllDepartment"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
    /**
     * 部门详情查询
     * @param $params
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function searchDepartment($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/organization/department/searchDepartment"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
    /**
     * 新增部门
     * @param $params
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addDepartment($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/organization/department/addDepartment"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
    /**
     * 更新部门
     * @param $params
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateDepartment($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/organization/department/updateDepartment"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
    /**
     * 更新门店状态
     * @param $params
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateStoreStatus($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/organization/department/updateStoreStatus"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
}
