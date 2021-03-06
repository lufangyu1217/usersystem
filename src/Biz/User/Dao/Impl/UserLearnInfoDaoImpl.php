<?php

namespace Biz\User\Dao\Impl;

use Biz\User\Dao\UserLearnInfoDao;
use Codeages\Biz\Framework\Dao\GeneralDaoImpl;

class UserLearnInfoDaoImpl extends GeneralDaoImpl implements UserLearnInfoDao
{

    protected $table = 'edu_experience';

    public function findEduExperiences($userId)
    {
        $sql = "SELECT * FROM {$this->table} WHERE userId = ?";     
        return $this->db()->fetchAll($sql, array($userId)) ?: array();
    }

    public function getTableFields()
    {
        $sql = "SELECT * FROM {$this->table()}";
        $select = $this->db()->query($sql);
        $columnCount = $select->columnCount();
        for ($count=0;$count<$columnCount;$count++) {
            $meta = $select->getColumnMeta($count);
            $columns[] = $meta['name'];
        }
        
        return $columns ?: null;
    }

    public function declares()
    {
        return array(
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