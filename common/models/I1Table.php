<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 22.02.2019
 * Time: 14:30
 */

namespace common\models;


use yii\db\ActiveRecord;

/**
 * Class I1Table
 * @package common\models
 * @property int $id [int(11)]
 * @property int $value [int(11)]
 */

class I1Table extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%I1table}}';
    }

    public static function getInstance()
    {
        $i1Row = static::findOne(1);
        if(!$i1Row)
        {
            $i1Row = new static();
            $i1Row->id = 1;
        }
        return $i1Row;
    }

    public function increment()
    {
        $this->value++;
        $this->save();
    }

    public function rules()
    {
        return [
            [['id', 'value'], 'required'],
            [['id', 'value'], 'integer'],
        ];
    }

}