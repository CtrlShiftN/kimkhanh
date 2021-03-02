<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%product}}`.
 */
class m210301_074341_add_feature_image_column_related_images_column_to_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%product}}', 'feature_image', $this->string()->notNull());
        $this->addColumn('{{%product}}', 'related_images', $this->string()->comment("CSV of images links"));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%product}}', 'feature_image');
        $this->dropColumn('{{%product}}', 'related_images');
    }
}
