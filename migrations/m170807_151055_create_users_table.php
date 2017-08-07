<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m170807_151055_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users',
            [
                'id' => $this->primaryKey(),
                'name' => $this->string(),
                'email' => $this->string(),
                'password' => $this->string(),
                'phone' => $this->string(),
                'park' => $this->string(),
                'failed_logins' => $this->integer(),
                'status' => $this->integer(),
                'search_month' => $this->integer(),
                'search_limit' => $this->integer(),
                'search_onday' => $this->integer(),
                'auth_code' => $this->string()
            ], 'ENGINE=InnoDB');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
