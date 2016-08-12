<?php

namespace Biz\User\Dao\Impl;

use Biz\User\Dao\UserSearchDao;
use Biz\User\Dao\Impl\UserSearchDaoImpl;
use Codeages\Biz\Framework\Dao\GeneralDaoImpl;

class UserSearchDaoImpl extends GeneralDaoImpl implements UserSearchDao
{
    public function searchBasicInfo($conditions)
    {
        $sql = "SELECT * FROM user_basic INNER JOIN department ON user_basic.departmentId = department.id INNER JOIN user ON user.id = user_basic.userId WHERE {$conditions}";
        return $this->db()->fetchAll($sql) ?: array();
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