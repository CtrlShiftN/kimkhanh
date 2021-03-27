<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%document}}`.
 */
class m210326_061349_create_document_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%document}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'avatar' => $this->string(),
            'link' => $this->string()->notNull(),
            'doc_types' => $this->smallInteger(3)->defaultValue(0)->comment('0: firmwares, 1: images, 2: files'),
            'status' => $this->smallInteger(3)->defaultValue(1)->comment('0: inactive, 1: active'),
            'created' => $this->dateTime(),
            'updated' => $this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%document}}');
    }
}
