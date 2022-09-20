<?php

namespace app\model;

use think\Model;
use think\model\concern\SoftDelete;

class Harvest extends Model
{
    use SoftDelete;

    public const NULL_DATETIME = '1970-01-01 00:00:00';
    public const DATETIME_FORMAT = 'Y-m-d H:i:s';
    public $id;
    public $name;
    public $time;
    public $amount;
    public $source;
    public $balance;
    public $create_time = self::NULL_DATETIME;
    public $update_time = self::NULL_DATETIME;
    protected $table = 'harvest';

    protected $autoWriteTimestamp = 'datetime';


}
