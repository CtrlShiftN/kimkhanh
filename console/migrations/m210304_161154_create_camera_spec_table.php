<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%camera_spec}}`.
 */
class m210304_161154_create_camera_spec_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%camera_spec}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'product_code' => $this->string(255),
            'trademark' => $this->string(),
            'camera_type' => $this->string(),
            'sensor_type' => $this->string(),
            'image_sensor' => $this->string(),
            'minimum_illumination' => $this->string(),
            'lens' => $this->string(),
            'video_output' => $this->string(),
            'resolution' => $this->string(),
            'compression_standard' => $this->string(),
            'camera_design' => $this->string(),
            'support' => $this->string(),
            'infrared_quantity' => $this->integer(),
            'range' => $this->double(),
            'working_temperature' => $this->string(),
            'electricity_supply' => $this->string(),
            'size' => $this->string(),
            'weight' => $this->double(),
            'created' => $this->datetime(),
            'updated' => $this->datetime(),
            'note' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%camera_spec}}');
    }
}
