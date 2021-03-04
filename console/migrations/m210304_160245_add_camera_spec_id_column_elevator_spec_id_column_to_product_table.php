<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%product}}`.
 */
class m210304_160245_add_camera_spec_id_column_elevator_spec_id_column_to_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%product}}', 'camera_spec_id', $this->smallInteger(5));
        $this->addColumn('{{%product}}', 'elevator_spec_id', $this->integer(5));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%product}}', 'camera_spec_id');
        $this->dropColumn('{{%product}}', 'elevator_spec_id');
    }
}
