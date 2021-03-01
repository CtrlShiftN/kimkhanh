<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_order}}`.
 */
class m210301_075357_create_product_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_order}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'quantity' => $this->smallInteger(5)->defaultValue(0),
            'status' => $this->smallInteger(2)->defaultValue(0)->comment("0: new, 1: processing, 2: delivering, 3: success, 4: failed"),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_order}}');
    }
}
