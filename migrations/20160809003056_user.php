<?php

use Phpmig\Migration\Migration;

class User extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $container = $this->getContainer();
        $table = new Doctrine\DBAL\Schema\Table('user');
        $table->addColumn('id', 'integer', array('autoincrement' => true));
        $table->addColumn('number', 'string', array('length' => 4, 'comment' => '员工工号'));
        $table->addColumn('role', 'string', array('length' => 32, 'default' => 'ROLE_USER', 'comment' => '用户角色'));
        $table->addColumn('status', 'string', array('default' => 'on', 'comment' => '在职状态'));
        $table->addColumn('joinTime', 'integer', array('default' => 0, 'comment' => '入职时间'));
        $table->addColumn('quitTime', 'integer', array('default' => 0, 'comment' => '离职时间'));
        $table->addColumn('createdTime', 'integer', array('default' => 0, 'comment' => '创建时间'));
        $table->addColumn('updatedTime', 'integer', array('default' => 0, 'comment' => '更新时间'));
        $table->setPrimaryKey(array('id'));
        $container['db']->getSchemaManager()->createTable($table);
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $container = $this->getContainer();
        $container['db']->getSchemaManager()->dropTable('user');
    }
}
