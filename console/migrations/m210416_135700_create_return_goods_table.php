<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%return_goods}}`.
 */
class m210416_135700_create_return_goods_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%return_goods}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'phone' => $this->smallInteger(10)->notNull(),
            'gmail' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'nameProduct' => $this->string()->notNull(),
            'type' => $this->string()->notNull(),
            'subject' => $this->string()->notNull(),
            'content' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%return_goods}}');
    }
}
