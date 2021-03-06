<?php

namespace Biz\Department\Dao\Impl;

use Biz\Department\Dao\DepartmentDao;
use Codeages\Biz\Framework\Dao\GeneralDaoImpl;

class DepartmentDaoImpl extends GeneralDaoImpl implements DepartmentDao
{
    protected $table = 'department';

    public function find()
    {
        $sql = "SELECT * FROM {$this->table}";     
        return $this->db()->fetchAll($sql) ?: array();
    }

    public function getByName($name)
    {
        $sql = "SELECT * FROM {$this->table} WHERE name = ?";
        return $this->db()->fetchAll($sql,array($name)) ?: array();
    }


    public function declares()
    {
        return array(
            'timestamps' => array('createdTime', 'updatedTime'),
            'serializes' => array(),
            'conditions' => array(
                'id = :id',
                'name = :name',
                'status = :status',
                'type = :type',
            ),
        );
    }
}