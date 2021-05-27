<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%trademark}}`.
 */
class m210518_190120_create_trademark_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%trademark}}', [
            'id' => $this->primaryKey(),
            'type' => $this->smallInteger()->comment('1:Camera; 2: Thang may'),
            'trade_mark' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%trademark}}');
    }
}
