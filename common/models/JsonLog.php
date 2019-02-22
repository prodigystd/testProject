<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 22.02.2019
 * Time: 15:03
 */

namespace common\models;

use Yii;
use yii\bootstrap\Modal;
use yii\helpers\Json;

/**
 * Class JSONLog
 * @package common\models
 *
 */
class JSONLog extends Modal
{
    public $datetime;
    public $N;
    public $R;
    public $I1;
    public $I2;

    public static function log(String $datetime, int $N, array $R, int $I1, int $I2)
    {
        $log = new static();
        $log->datetime = $datetime;
        $log->N = $N;
        $log->R = $R;
        $log->I1 = $I1;
        $log->I2 = $I2;
    }

    public function save()
    {
        $jsonContent = Json::encode($this);
        echo $jsonFile= Yii::getAlias('@webroot/assets/log.json');
        $fp = fopen($jsonFile, 'w+');
        fwrite($fp, $jsonContent);
        fclose($fp);
    }
}