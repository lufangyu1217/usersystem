<?php

namespace Biz\User;

interface UserService
{
    /**
     * user表
     */
    public function createUser($user);

    public function updateUser($id, $fields);

    public function getUser($id);

    public function searchUsers($conditions, $orderBy, $start, $limit);

    public function checkNumberForCreate($number);

    /**
     * user_basic_info表
     */
    public function getBasic($userId);

    public function searchBasicUsers($conditions, $orderBy, $start, $limit);

    public function findDepartmentsCounts($departments);

    /**
     * user_family_info表
     */
    public function findFamilyMembers($userId);

    /**
     * user_learn_info表
     */
    public function findEduExperiences($userId);

    /**
     * user_work_info表
     */
    public function findWorkExperiences($userId);

    /**
     * user_other_info表
     */
    public function getOtherInfo($userId);

    public function searchBasicInfo($conditions);
}