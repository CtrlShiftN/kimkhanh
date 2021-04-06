<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%recruitment}}`.
 */
class m210403_103656_create_recruitment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%recruitment}}', [
            'id' => $this->primaryKey(),
            'fullname' => $this->string()->notNull(),
            'img_avatar' => $this->string()->notNull(),
            'birth' => $this->string()->notNull(),
            'gender' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'tel' => $this->string(12)->notNull(),
            'email' => $this->string()->notNull(),
            'foreign_language' => $this->string(),
            'experience' => $this->string(),
            'skills' => $this->string(),
            'interests' => $this->string(),
            'note' => $this->string(),
            'file_cv' => $this->string(),
            'created' => $this->dateTime(),
            'updated' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%recruitment}}');
    }
}
