<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 20.02.2019
 * Time: 10:08
 */

/**
 * Class RandomNumberService
 * @property \yii\redis\Cache $redis
 */
class RandomNumberService
{
    public $redis;

    public function __construct()
    {
        $this->redis = \Yii::$app->redis;
    }

    // param 'R1', 'R2', .. 'Rn'
    public function getCachedValue(String $Rn): int
    {
        return $this->redis->getOrSet($Rn, function () {
            return random_int(1, 100);
        }, 60);
    }


    public function getArrayOfValues($size): array
    {
        $values = [];
        for ($n = 1; $n < $size; $n++) {
            $randKey = 'R' . $n;
            $values[$randKey] = $this->getCachedValue($randKey);
        }
        return $values;
    }


}