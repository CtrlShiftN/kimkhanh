<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%recommend}}`.
 */
class m210416_090931_create_recommend_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%recommend}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'feature_image' => $this->string(),
            'content_html' => $this->text()->notNull(),
            'status' => $this->smallInteger(3)->defaultValue(1)->comment('0: inactive; 1: active'),
            'note' => $this->string(),
            'created' => $this->dateTime(),
            'updated' => $this->dateTime(),
            'admin_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%recommend}}');
    }
}
