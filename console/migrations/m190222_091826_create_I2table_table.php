<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%I2table}}`.
 */
class m190222_091826_create_I2table_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%I2table}}', [
            'page_id' => $this->primaryKey(),
            'value' => $this->integer(11)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%I2table}}');
    }
}
