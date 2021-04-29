<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_order}}`.
 */
class m210428_021340_create_product_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_order}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'product_id' => $this->integer(),
            'amount' => $this->integer(),
            'is_order' => $this->smallInteger()->comment('0: no, 1:yes'),
            'is_shipping' => $this->smallInteger()->comment('0: no, 1:yes'),
            'is_delivered' => $this->smallInteger()->comment('0: no, 1:yes'),
            'is_cancelled' => $this->smallInteger()->comment('0: no, 1:yes'),
            'is_postpone' => $this->smallInteger()->comment('0: no, 1:yes'),
            'created' => $this->dateTime(),
            'updated' => $this->dateTime(),
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
