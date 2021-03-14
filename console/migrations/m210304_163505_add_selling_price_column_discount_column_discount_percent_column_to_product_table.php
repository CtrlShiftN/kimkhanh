<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%product}}`.
 */
class m210304_163505_add_selling_price_column_discount_column_discount_percent_column_to_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%product}}', 'selling_price', $this->integer());
        $this->addColumn('{{%product}}', 'discount', $this->integer());
        $this->addColumn('{{%product}}', 'discount_percent', $this->double());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%product}}', 'selling_price');
        $this->dropColumn('{{%product}}', 'discount');
        $this->dropColumn('{{%product}}', 'discount_percent');
    }
}
