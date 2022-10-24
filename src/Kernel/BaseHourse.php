<?php

/*
 * This file is part of the overtrue/wechat.
 *
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Feiyuplan\Jnhouse\Kernel;

class BaseHourse
{

    public $app;
    public $header;
    public function getHearder(){
        return $this->header  = [
            'appId'=>$this->app->config["Appid"]??"",
            'X-AUTH-SIGN' => $this->app->getTicketSignature($this->app->access_token),
            "X-TIME-STAMP"=>$this->app->form_params["timeStamp"],
            'X-Client'=>$this->app["x_client"],
            'User-Agent'=>'curl',
            'companyUuid'=>$this->app['companyUuid'],
            'X-AUTH-OPENPLATFORM-TOKEN'=>$this->app->access_token??"",
            'content-type' => 'application/json'
        ];
    }
}
