<?php

namespace Feiyuplan\Jnhouse\Hourse\Commonhouse;
use Feiyuplan\Jnhouse\Kernel\BaseClient;
use Feiyuplan\Jnhouse\Kernel\ServiceContainer;
use Feiyuplan\Jnhouse\Kernel\BaseHourse;
/**
 * Commonhouse Client
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
     * 根据uuids查询员工信息（不包含删除的)
     * @param $params
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

    /**
     * 根据uuids查询公共营销库房源
     * @param $params
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listPropertyByUuids($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/commonhouse/listPropertyByUuids","/api/marketingopenapi"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
    /**
     * 通过uuids集合list获取房源信息(不包含删除的)
     * @param $params
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listValidPropertyBaseByUuids($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/commonhouse/listValidPropertyBaseByUuids","/api/marketingopenapi"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
    /**
     * 通过uuids集合list获取房源视频信息(不包含删除的)
     * @param $params
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listValidPropertyVideoByUuids($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/commonhouse/listValidPropertyVideoByUuids","/api/marketingopenapi"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 通过uuids集合list获取全景房VR信息(不包含删除的)
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listValidPropertyVrInfoByUuids($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/commonhouse/listValidPropertyVrInfoByUuids","/api/marketingopenapi"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
    /**
     * 根据uuids查询房源角色人信息（不包含删除的)
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listValidPropertyRoleByUuids($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/realhouse/listValidPropertyRoleByUuids","/api/marketingopenapi"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 通过uuids集合list获取房源图片信息(不包含删除的)
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listValidPropertyPhotoByUuids($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/commonhouse/listValidPropertyPhotoByUuids","/api/marketingopenapi"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 分页拉取资源UuidList
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function pullResourceUuidList($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/company/pullResourceUuidList","/api/marketingopenapi"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
}
