<?php

namespace app\controller;

use think\response\Json;

class Wxmsg
{

    public function wxaccess(): Json
    {
        return Json(['code' => 0, 'data' => [], 'errmsg' => 'wxaccess.test']);
    }
}
