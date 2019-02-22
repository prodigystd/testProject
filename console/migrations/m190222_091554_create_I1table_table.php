<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%I1table}}`.
 */
class m190222_091554_create_I1table_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%I1table}}', [
            'id' => $this->primaryKey(),
            'value' => $this->integer(11)->notNull()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%I1table}}');
    }
}
