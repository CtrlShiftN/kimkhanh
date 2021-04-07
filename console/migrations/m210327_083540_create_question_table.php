<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%question}}`.
 */
class m210327_083540_create_question_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%question}}', [
            'id' => $this->primaryKey(),
            'question_html' => $this->text()->notNull(),
            'answer_html' => $this->text()->notNull(),
            'created' => $this->dateTime(),
            'updated' => $this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%question}}');
    }
}
