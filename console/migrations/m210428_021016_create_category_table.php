<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m210428_021016_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'type' => $this->smallInteger()->comment('1:camera, 2:thang may'),
            'code' => $this->smallInteger(),
            'name' => $this->string(),
            'slug' => $this->string(),
            'status' => $this->smallInteger()->comment('0:inactive, 1:active'),
            'created' => $this->dateTime(),
            'updated' => $this->dateTime(),
            'note' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
