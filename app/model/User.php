<?php

namespace app\model;

use think\Model;
use think\model\concern\SoftDelete;

class User extends Model
{
    use SoftDelete;

    public const NULL_DATETIME = '1970-01-01 00:00:00';
    public const DATETIME_FORMAT = 'Y-m-d H:i:s';

    public $id;
    public $name;
    public $user;
    public $deleted;
    
}
