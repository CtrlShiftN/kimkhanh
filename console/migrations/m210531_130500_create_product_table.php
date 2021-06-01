<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m210531_130500_create_product_table extends Migration
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
            'status' => $this->smallInteger(6)->comment('0: inactive; 1: active')->defaultValue(1),
            'created' => $this->datetime(),
            'updated' => $this->datetime(),
            'category_id' => $this->integer(),
            'trade_mark' => $this->string(),
            'avatar' => $this->string(),
            'images' => $this->string(),
            'description_html' => $this->text(),
            'description' => $this->text(),
            'code' => $this->string(),
            'selling_price' => $this->string(),
            'discount_percent' => $this->string(),
            'is_discount' => $this->smallInteger()->comment('0:no; 1:yes'),
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
