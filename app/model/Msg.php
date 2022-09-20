<?php

namespace app\model;

use think\Model;

class Msg extends Model
{

    public $id;
    public $to_user_name;
    public $from_user_name;
    public $create_time;
    public $msg_type;
    public $content;
    public $msg_id;

    protected $table = 'msg';
}
