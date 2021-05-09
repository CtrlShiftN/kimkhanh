<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post_category}}`.
 */
class m210508_013533_create_post_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post_category}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'name' => $this->string(),
            'slug' => $this->string(),
            'status' => $this->smallInteger(3)->defaultValue(1)->comment('0: inactive, 1: active'),
            'created' => $this->dateTime(),
            'updated' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post_category}}');
    }
}
