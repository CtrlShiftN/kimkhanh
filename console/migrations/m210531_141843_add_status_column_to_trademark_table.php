<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%trademark}}`.
 */
class m210531_141843_add_status_column_to_trademark_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%trademark}}', 'status', $this->smallInteger()->defaultValue(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%trademark}}', 'status');
    }
}
