<?php

namespace Biz\User\Dao;

use Codeages\Biz\Framework\Dao\GeneralDaoInterface;

interface UserSearchDao extends GeneralDaoInterface
{
    public function searchBasicInfo($conditions);
}