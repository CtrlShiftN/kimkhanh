<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_type}}`.
 */
class m210601_133507_create_product_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_type}}', [
            'id' => $this->primaryKey(),
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
        $this->dropTable('{{%product_type}}');
    }
}
