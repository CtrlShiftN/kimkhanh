<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m210226_164144_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'product_type_id' => $this->integer(),
            'category_id' => $this->integer(),
            'description_html' => $this->text(),
            'description_text' => $this->string(),
            'trademark' => $this->string(),
            'supplier' => $this->string(),
            'code' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger(3)->defaultValue(1)->comment("0: inactive, 1: active"),
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
        $this->dropTable('{{%product}}');
    }
}
