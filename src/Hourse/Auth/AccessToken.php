<?php

namespace Feiyuplan\Jnhouse\Hourse\Auth;
use Feiyuplan\Jnhouse\Kernel\Exceptions\Exception;
use Feiyuplan\Jnhouse\Kernel\ServiceContainer;
use Feiyuplan\Jnhouse\Kernel\BaseClient;
use Feiyuplan\Jnhouse\Kernel\Until\RedisCache;

class AccessToken
{
    public $app;
    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
    }

    /**
     * token
     * @param array $params
     * @return mixed
     * @throws Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getToken(array $params=[]){
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        $RedisCache=new RedisCache();
        if($RedisCache->get("Qf_AccessToken")){
            $str_token=$RedisCache->get("Qf_AccessToken");
            $token=json_decode($str_token);
            if(isset($token->time)&&(time()-$token->time<(7200-60))){
                return $token->accessToken;//直接返回
            }
            $header  = [
                'X-AUTH-OPENPLATFORM-APP-ID' => $this->app["Appid"],
                'X-AUTH-SIGN' => $this->app->getTicketSignature(),
                "X-TIME-STAMP"=>"{$this->app->form_params["timeStamp"]}",
                'X-Client'=>$this->app["x_client"],
                'User-Agent'=>'curl',
                'companyUuid'=>$this->app['companyUuid'],
            ];
            $time=time();
            $BaseClient=new BaseClient();
            $response=$BaseClient->httpGet($this->app->getUrl("/token/refreshToken"),[
                'headers'=>$header,
                'query' => [
                ]
            ]);
        }else{
            $header  = [
                'X-AUTH-OPENPLATFORM-APP-ID' => $this->app["Appid"],
                'X-AUTH-SIGN' => $this->app->getTicketSignature(),
                "X-TIME-STAMP"=>"{$this->app->form_params["timeStamp"]}",
                'X-Client'=>$this->app["x_client"],
                'User-Agent'=>'curl',
                'companyUuid'=>$this->app['companyUuid'],
            ];
            $time=time();
            $BaseClient=new BaseClient();
            $response=$BaseClient->httpGet($this->app->getUrl("/token/getToken"),[
                'headers'=>$header,
                'query' => [
                ]
            ]);
        }
        if($response->responseCode==1){
            $accessToken=$response->data->accessToken;
            $RedisCache->setex("Qf_AccessToken",json_encode(["accessToken"=>$accessToken,"time"=>$time]),7200);
            return $accessToken;
        }else{
            throw new Exception(json_encode($response));
        }
    }
    public function getTokenfile(array $params=[]){
        $this->app->form_params=$params;
        $this->app->form_params["timeStamp"]=time()*1000;
        if(file_exists("qiaofang.json")){
            $str_token=file_get_contents("qiaofang.json");
            if($str_token){
                $token=json_decode($str_token);
                if(isset($token->time)&&(time()-$token->time<1800)){
                    return $token->accessToken;//直接返回
                }
                $header  = [
                    'X-AUTH-OPENPLATFORM-APP-ID' => $this->app["Appid"],
                    'X-AUTH-SIGN' => $this->app->getTicketSignature(),
                    "X-TIME-STAMP"=>"{$this->app->form_params["timeStamp"]}",
                    'X-Client'=>$this->app["x_client"],
                    'User-Agent'=>'curl',
                    'companyUuid'=>$this->app['companyUuid'],
                ];
                $time=time();
                $BaseClient=new BaseClient();
                $response=$BaseClient->httpGet($this->app->getUrl("/token/refreshToken"),[
                    'headers'=>$header,
                    'query' => [
                    ]
                ]);
            }
        }else{
            $header  = [
                'X-AUTH-OPENPLATFORM-APP-ID' => $this->app["Appid"],
                'X-AUTH-SIGN' => $this->app->getTicketSignature(),
                "X-TIME-STAMP"=>"{$this->app->form_params["timeStamp"]}",
                'X-Client'=>$this->app["x_client"],
                'User-Agent'=>'curl',
                'companyUuid'=>$this->app['companyUuid'],
            ];
            $time=time();
            $BaseClient=new BaseClient();
            $response=$BaseClient->httpGet($this->app->getUrl("/token/getToken"),[
                'headers'=>$header,
                'query' => [
                ]
            ]);
        }
        if($response->responseCode==1){
            $accessToken=$response->data->accessToken;
            file_put_contents("qiaofang.json",json_encode(["accessToken"=>$accessToken,"time"=>$time]));
            return $accessToken;
        }else{
            throw new Exception(json_encode($response));
        }
    }
    public function refreshToken(){
        $this->app->form_params["timeStamp"]=time()*1000;
        $RedisCache=new RedisCache();
        if($RedisCache->get("Qf_AccessToken")){
            $header  = [
                'X-AUTH-OPENPLATFORM-APP-ID' => $this->app["Appid"],
                'X-AUTH-SIGN' => $this->app->getTicketSignature(),
                "X-TIME-STAMP"=>"{$this->app->form_params["timeStamp"]}",
                'X-Client'=>$this->app["x_client"],
                'User-Agent'=>'curl',
                'companyUuid'=>$this->app['companyUuid'],
            ];
            $time=time();
            $BaseClient=new BaseClient();
            $response=$BaseClient->httpGet($this->app->getUrl("/token/refreshToken"),[
                'headers'=>$header,
                'query' => [
                ]
            ]);
        }else{
            $header  = [
                'X-AUTH-OPENPLATFORM-APP-ID' => $this->app["Appid"],
                'X-AUTH-SIGN' => $this->app->getTicketSignature(),
                "X-TIME-STAMP"=>"{$this->app->form_params["timeStamp"]}",
                'X-Client'=>$this->app["x_client"],
                'User-Agent'=>'curl',
                'companyUuid'=>$this->app['companyUuid'],
            ];
            $time=time();
            $BaseClient=new BaseClient();
            $response=$BaseClient->httpGet($this->app->getUrl("/token/getToken"),[
                'headers'=>$header,
                'query' => [
                ]
            ]);
        }
        if($response->responseCode==1){
            $accessToken=$response->data->accessToken;
            $RedisCache->setex("Qf_AccessToken",json_encode(["accessToken"=>$accessToken,"time"=>$time]),7200);
            return $accessToken;
        }else{
            throw new Exception(json_encode($response));
        }
    }
}