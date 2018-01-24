<?php

use yii\db\Migration;

/**
 * Class m180124_193339_users_table
 */
class m180124_193339_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
      $this->createTable('users', [
            'id' => $this->primaryKey(11),
            'first_name' => $this->string(50)->notNull(),
            'last_name' => $this->string(50)->notNull(),
            'employee_id' => $this->string(64)->notNull()->unique(),
            'email' => $this->string(200)->notNull(),
            'tenant' => $this->integer(3)->notNull(),
            'username' => $this->string(255)->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string(255)->notNull(),
            'password_reset_token' => $this->string(255)->notNull(),
            'group' => $this->integer(3),
            'state' => $this->string(2)->notNull(),
            'use_external_auth' => $this->boolean()->defaultValue(false),
            'external_id' => $this->string(255),
            'created_at' => $this->integer(11)->notNull(),
            'updated_at' => $this->integer(11),
            'last_login' => $this->integer(11),
      ]);

      $this->createIndex(
        'idx_users_id',
        'users',
        'id'
      );

      $this->createIndex(
        'idx_users_first_name',
        'users',
        'first_name'
      );

      $this->createIndex(
        'idx_users_last_name',
        'users',
        'last_name'
      );

      $this->createIndex(
        'idx_users_tenant',
        'users',
        'tenant'
      );

      $this->createIndex(
        'idx_users_username',
        'users',
        'username'
      );

      $this->createIndex(
        'idx_users_employee_id',
        'users',
        'employee_id'
      );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
      $this->dropIndex(
        'idx_users_id',
        'users',
        'id'
      );

      $this->dropIndex(
        'idx_users_first_name',
        'users',
        'first_name'
      );

      $this->dropIndex(
        'idx_users_last_name',
        'users',
        'last_name'
      );

      $this->dropIndex(
        'idx_users_tenant',
        'users',
        'tenant'
      );

      $this->dropIndex(
        'idx_users_username',
        'users',
        'username'
      );

      $this->dropIndex(
        'idx_users_employee_id',
        'users',
        'employee_id'
      );

      $this->dropTable('users');
    }

}
