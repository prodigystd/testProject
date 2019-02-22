<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 22.02.2019
 * Time: 14:38
 */

namespace common\models;

use yii\db\ActiveRecord;

/**
 * Class I2Table
 * @package common\models
 * @property int $page_id [int(11)]
 * @property int $value [int(11)]
 */

class I2Table extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%I2table}}';
    }

    public static function getByPageId($pageID)
    {
        $i2Row = static::findOne($pageID);
        if(!$i2Row)
        {
            $i2Row = new static();
            $i2Row->page_id = $pageID;
        }
        return $i2Row;
    }

    public function increment()
    {
        $this->value++;
        $this->save();
    }

    public function rules()
    {
        return [
            [['page_id', 'value'], 'required'],
            [['page_id', 'value'], 'integer'],
        ];
    }

}