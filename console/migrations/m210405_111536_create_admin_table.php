<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%admin}}`.
 */
class m210405_111536_create_admin_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%admin}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'auth_key' => $this->string(32)->defaultValue(null),
            'password_reset_token' => $this->string()->unique(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'tel' => $this->string(12)->defaultValue(null),
            'referral_code' => $this->string()->notNull()->unique(),
            'role' => $this->smallInteger(3)->defaultValue(1)->comment("1: admin"),
            'created' => $this->datetime(),
            'updated' => $this->datetime(),
            'status' => $this->smallInteger(3)->defaultValue(1)->comment("0: inactive, 1: active"),
            'avatar' => $this->string()->defaultValue(null),
            'note' => $this->string()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%admin}}');
    }
}
