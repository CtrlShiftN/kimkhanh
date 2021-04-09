<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%contact}}`.
 */
class m210409_194620_add_created_column_updated_column_to_contact_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%contact}}', 'created', $this->datetime());
        $this->addColumn('{{%contact}}', 'updated', $this->datetime());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%contact}}', 'created');
        $this->dropColumn('{{%contact}}', 'updated');
    }
}
