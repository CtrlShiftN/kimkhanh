<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m210508_010017_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'title' => $this->string()->notNull(),
            'summary' => $this->string()->notNull(),
            'category' => $this->smallInteger(3),
            'author' => $this->integer()->comment('admin_id'),
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
        $this->dropTable('{{%post}}');
    }
}
