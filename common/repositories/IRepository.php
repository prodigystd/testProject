<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 22.02.2019
 * Time: 14:44
 */

namespace common\repositories;

use common\models\I1Table;
use common\models\I2Table;

class IRepository
{
    public function increment($pageID)
    {
        I1Table::getInstance()->increment();
        I2Table::getByPageId($pageID)->increment();
    }
}