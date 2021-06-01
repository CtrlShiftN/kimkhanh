<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m210531_135346_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'type' => $this->smallInteger()->comment('1:camera, 2:elevator'),
            'code' => $this->smallInteger(),
            'name' => $this->string(),
            'slug' => $this->string(),
            'status' => $this->smallInteger()->comment('0:inactive; 1:active')->defaultValue(1),
            'created' => $this->datetime(),
            'updated' => $this->datetime(),
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
