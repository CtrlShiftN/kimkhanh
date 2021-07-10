<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%trademark}}`.
 */
class m210531_141237_create_trademark_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%trademark}}', [
            'id' => $this->primaryKey(),
            'type' => $this->smallInteger()->comment('1:camera; 2:elevator'),
            'name' => $this->string(),
            'created' => $this->datetime(),
            'updated' => $this->datetime(),
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
