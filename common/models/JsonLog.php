<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 22.02.2019
 * Time: 15:03
 */

namespace common\models;

use Yii;
use yii\helpers\Json;

/**
 * Class JSONLog
 * @package common\models
 *
 */
class JSONLog
{
    public $datetime;
    public $N;
    public $R;
    public $I1;
    public $I2;

    public static function log(int $N, array $R, int $I1, int $I2)
    {
        $log = new static();
        $log->datetime = date('Y-m-d H:i:s');
        $log->N = $N;
        $log->R = $R;
        $log->I1 = $I1;
        $log->I2 = $I2;
        $log->save();
    }

    public function save()
    {
        $jsonContent = Json::encode($this);
        $jsonFile = Yii::getAlias('@webroot/../../log.json');
        $fp = fopen($jsonFile, 'a');
        fwrite($fp, $jsonContent . PHP_EOL);
        fclose($fp);
    }
}