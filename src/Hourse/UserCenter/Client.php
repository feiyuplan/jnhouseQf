<?php

namespace Feiyuplan\Jnhouse\Hourse\UserCenter;
use Feiyuplan\Jnhouse\Kernel\BaseClient;
use Feiyuplan\Jnhouse\Kernel\ServiceContainer;
use Feiyuplan\Jnhouse\Kernel\BaseHourse;
/**
 * UserCenter Client
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
    /**
     * 新增员工
     * @param $params
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addUser($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/organization/usercenter/addUser"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 更新员工
     * @param $params
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateUser($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/organization/usercenter/updateUser"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 更新员工部门和职务
     * @param $params
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateUserDeptAndPosition($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/organization/usercenter/updateUserDeptAndPosition"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 员工离职
     * @param $params
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function userDimission($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/organization/usercenter/userDimission"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
    /**
     * 员工复职
     * @param $params
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function userResume($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/organization/usercenter/userResume"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
    /**
     * 更新员工手机号
     * @param $params
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateUserPhone($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/organization/usercenter/updateUserPhone"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
    /**
     * 批量冻结/解冻员工
     * @param $params
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function batchSetUserFreeStatus($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/organization/usercenter/batchSetUserFreeStatus"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
    /**
     * 批量查询员工信息（不包含删除的)
     * @param $params
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listValidEmployeeByUuids($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/organization/usercenter/listValidEmployeeByUuids"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
    /**
     * 批量获取员工身份证号
     * @param $params
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function batchGetUserIdCard($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/organization/usercenter/batchGetUserIdCard"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 绑定短信
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function smsWubaBind($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/organization/usercenter/smsWubaBind"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 绑定链接
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAuthenticatedUrl($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/organization/usercenter/getAuthenticatedUrl"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }

    /**
     * 获取用户三网账号
     * @param $params
     * @return array|\Feiyuplan\Jnhouse\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUserBindInfo($params)
    {
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $BaseClient=new BaseClient();
        $response=$BaseClient->httpPost($this->app->getUrl("/common/getUserBindInfo","/api/marketingopenapi"),[
            'headers'=>$this->getHearder(),
            'query' =>$this->app->form_params
        ]);
        return $response;
    }
}
