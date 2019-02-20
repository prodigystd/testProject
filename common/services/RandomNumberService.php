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


    public function getCachedRandomValue($Rn) //R1, R2, .. Rn
    {
//        $this->redis->getOrSet($Rn,)

    }








}