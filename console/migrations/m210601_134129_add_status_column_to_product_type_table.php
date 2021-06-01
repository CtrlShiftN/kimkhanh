<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%product_type}}`.
 */
class m210601_134129_add_status_column_to_product_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%product_type}}', 'status', $this->smallInteger()->comment('0:inactive; 1:active')->defaultValue(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%product_type}}', 'status');
    }
}
