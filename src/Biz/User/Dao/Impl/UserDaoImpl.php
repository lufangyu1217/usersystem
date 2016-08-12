<?php

namespace Biz\User\Dao\Impl;

use Biz\User\Dao\UserDao;
use Biz\User\Dao\Impl\UserDaoImpl;
use Codeages\Biz\Framework\Dao\GeneralDaoImpl;

class UserDaoImpl extends GeneralDaoImpl implements UserDao
{
    protected $table = 'user';

    public function findByStatus($status)
    {
        $sql = "SELECT * FROM $this->table WHERE status = {$status}";
        return $this->db()->fetchAll($sql) ?: array();
    }

    public function getUserByNumber($number)
    {
        $sql = "SELECT * FROM $this->table WHERE number = {$number}";
        return $this->db()->fetchAssoc($sql) ?: array();
    }
    
    public function getJoinTime($userId)
    {
        $sql = "SELECT joinTime FROM {$this->table} WHERE id = ?";
        return $this->db()->fetchAssoc($sql,array($userId)) ?: array();
    }

    public function getTableFields()
    {
        $sql = "SELECT * FROM {$this->table()}";
        $select = $this->db()->query($sql);
        $columnCount = $select->columnCount();
        for ($count=1;$count<$columnCount;$count++) {
            $meta = $select->getColumnMeta($count);
            $columns[] = $meta['name'];
        }
        
        return $columns ?: null;
    }

    public function declares()
    {
        return array(
            'timestamps' => array('createdTime', 'updatedTime'),
            'serializes' => array(),
            'conditions' => array(
                'id = :id',
                'status = :status',
                'number = :number',
            ),
        );
    }
}