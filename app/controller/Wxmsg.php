<?php

namespace app\controller;

use think\Exception;
use think\facade\Log;
use think\response\Xml;

class Wxmsg
{

    public function wxaccess(): Xml
    {
        $xmlResponse = [
            'ToUserName'   => '',
            'FromUserName' => '',
            'CreateTime'   => time(),
            'MsgType'      => 'text',
            'Content'      => '',
        ];
        try {
            $input = request()->getContent();
            $json = json_decode($input);
            if (empty($json)) {
                throw new Exception('请求错误', 500);
            }
            $xmlResponse['ToUserName'] = $json['FromUserName'];
            $xmlResponse['FromUserName'] = $json['ToUserName'];


            return Xml($xmlResponse);
        } catch (Exception $e) {
            $res = [
                'errmsg' => $e->getMessage(),
                'errno'  => $e->getCode(),
                'data'   => [],
            ];
            Log::write('fetch error:' . json_encode($res));
            return Xml([]);
        }


        return Xml([]);
    }
}
