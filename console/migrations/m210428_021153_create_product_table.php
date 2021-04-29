<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m210428_021153_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'slug' => $this->string(),
            'status' => $this->smallInteger()->comment('0: inactive, 1: active'),
            'created' => $this->dateTime(),
            'updated' => $this->dateTime(),
            'category_id' => $this->integer(),
            'trademark' => $this->string(),
            'avatar' => $this->string(),
            'images' => $this->string(),
            'description_html' => $this->text(),
            'description' => $this->text(),
            'code' => $this->string(),
            'selling_price' => $this->string(),
            'discount_percent' => $this->string(),
            'is_discount' => $this->smallInteger()->comment('0: no, 1:yes')->defaultValue(0),
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
