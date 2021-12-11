<?php

use think\migration\Migrator;
use think\migration\db\Column;

class AttrGroup extends Migrator
{
    public function change()
    {
        $table = $this->table('attr_group', ['comment'=>'规格组','engine' => 'InnoDB', 'encoding' => 'utf8mb4', 'collation' => 'utf8mb4_unicode_ci']);
        $table
            ->addColumn('name', 'string', ['limit' => 100, 'default' => '', 'comment' => '名称'])
            ->addColumn('create_time', 'integer', ['signed' => false,'limit' => 10, 'default' => 0, 'comment' => '创建时间'])
            ->addColumn('update_time', 'integer', ['signed' => false,'limit' => 10, 'default' => 0, 'comment' => '更新时间'])
            ->addColumn('delete_time', 'integer', ['signed' => false,'limit' => 10, 'default' => 0, 'comment' => '删除时间'])
            ->create();
    }
}
