<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m210226_162820_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'auth_key' => $this->string(32)->defaultValue(null),
            'password_reset_token' => $this->string()->unique(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'tel' => $this->string(12)->defaultValue(null),
            'referral_code' => $this->string()->notNull()->unique(),
            'role' => $this->smallInteger(3)->defaultValue(0)->comment("0: user, 1: admin"),
            'created' => $this->datetime(),
            'updated' => $this->datetime(),
            'status' => $this->smallInteger(3)->defaultValue(1)->comment("0: inactive, 1: active"),
            'avatar' => $this->string()->defaultValue(null),
            'banner' => $this->string()->defaultValue(null),
            'note' => $this->string()->defaultValue(null),
            'date_of_birth', $this->date()->comment("Y-m-d"),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
