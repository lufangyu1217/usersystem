<?php

namespace Biz\User\Impl;

use Biz\User\UserService;
use AppBundle\Common\ArrayToolkit;

class UserServiceImpl implements UserService
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function createUser($fields)
    {
        $this->validate($fields);
        $userTableFields = $this->getDao('user_dao')->getTableFields();
        $user = ArrayToolkit::parts($fields['basic'], $userTableFields);
        $user['status'] = 'on';
        $user['role'] = 'ROLE_USER';
        $lastInsertUser = $this->getDao('user_dao')->create($user);

        $otherTableFields = $this->getDao('other_info_dao')->getTableFields();
        $other = ArrayToolkit::parts($fields['other'], $otherTableFields);
        $other['userId'] = $lastInsertUser['id'];
        $this->getDao('other_info_dao')->create($other);

        $basicTableFields = $this->getDao('user_basic_dao')->getTableFields();
        $basic = ArrayToolkit::parts($fields['basic'], $basicTableFields);
        $basic['userId'] = $lastInsertUser['id'];
        // $department = $this->getDepartmentService()->getDepartmentByName($fields['basic']['department']);
        $basic['departmentId'] = 1;
        $this->getDao('user_basic_dao')->create($basic);

        $familyTableFields = $this->getDao('family_member_dao')->getTableFields();
        foreach ($fields['family'] as $member) {
            $member = ArrayToolkit::parts($member, $familyTableFields);
            $member['userId'] = $lastInsertUser['id'];
            $this->getDao('family_member_dao')->create($member);
        }

        $eduTableFields = $this->getDao('edu_experience_dao')->getTableFields();
        foreach ($fields['education'] as $education) {
            $education = ArrayToolkit::parts($education, $eduTableFields);
            $education['userId'] = $lastInsertUser['id'];
            $this->getDao('edu_experience_dao')->create($education);
        }

        $workTableFields = $this->getDao('work_experience_dao')->getTableFields();
        foreach ($fields['work'] as $work) {
            $work = ArrayToolkit::parts($work, $workTableFields);
            $work['userId'] = $lastInsertUser['id'];
            $this->getDao('work_experience_dao')->create($work);
        }

        return $lastInsertUser;
    }

    public function update($id, $fields)
    {
        $userTableFields = $this->getDao('user_basic_dao')->getTableFields();
        $userBasic = ArrayToolkit::parts($fields['basic'], $userTableFields);

        $this->getDao('user_basic_dao')->update($id, $userBasic);

        $familyTableFields = $this->getDao('family_member_dao')->getTableFields();
        foreach ($fields['family'] as $member) {
            $member = ArrayToolkit::parts($member, $familyTableFields);

            if (!empty(array_filter($member))) {
                if (empty($member['id'])) {
                    $member['userId'] = $user['id'];
                    $this->getDao('family_member_dao')->create($member);
                } else {
                    $this->getDao('family_member_dao')->update($member['id'], $member);
                }
            }
            
        }

        $eduTableFields = $this->getDao('edu_experience_dao')->getTableFields();
        foreach ($fields['education'] as $education) {
            $education = ArrayToolkit::parts($education, $eduTableFields);

            if (!empty(array_filter($education))) {
                if (empty($education['id'])) {
                    $education['userId'] = $user['id'];
                    $this->getDao('edu_experience_dao')->create($education);
                } else {
                    $this->getDao('edu_experience_dao')->update($education['id'], $education);
                }
            }
        }

        $workTableFields = $this->getDao('work_experience_dao')->getTableFields();
        foreach ($fields['work'] as $work) {
            $work = ArrayToolkit::parts($work, $workTableFields);

            if (!empty(array_filter($work))) {
                if (empty($work['id'])) {
                    $work['userId'] = $user['id'];
                    $this->getDao('work_experience_dao')->create($work);
                } else {
                    $this->getDao('work_experience_dao')->update($work['id'], $work);
                }
            }
        }


        $otherTableFields = $this->getDao('other_info_dao')->getTableFields();
        $other = ArrayToolkit::parts($fields['other'], $otherTableFields);

        $this->getDao('other_info_dao')->update($other['id'], $other);

        return $userBasic;
    }

    /**
     * user表
     */
    public function updateUser($id, $fields)
    {
        return $this->getDao('user_dao')->update($id, $fields);
    }

    public function checkNumberForCreate($number)
    {
        return $this->getDao('user_dao')->getUserByNumber($number);
    }

    public function getUser($id)
    {
        return $this->getDao('user_dao')->get($id);
    }

    public function searchUsers($conditions, $orderBy, $start, $limit)
    {
        return $this->getDao('user_dao')->search($conditions, $orderBy, $start, $limit);
    }

    /**
     * user_basic表
     */

    public function getBasic($userId)
    {
        $basic = $this->getDao('user_basic_dao')->get($userId);
        $joinTime = $this->getDao('user_dao')->getJoinTime($userId);    
        $basic['joinTime'] = $joinTime['joinTime'];

        // $basic['bornTime'] = date("Y-m-d", $basic['bornTime']);
        // $basic['joinTime'] = date("Y-m-d", $basic['joinTime']);

        return $basic;
    }

    public function searchBasicUsers($conditions, $orderBy, $start, $limit)
    {
        return $this->getDao('user_basic_dao')->search($conditions, $orderBy, $start, $limit);
    }

    public function findDepartmentsCounts($departmentNames)
    {   
        $counts = array();

        foreach ($departmentNames as $departmentName) {
            $counts[]['count'] = $this->getDao('user_basic_dao')->count(array(
                'department' => $departmentName['departmentName']
            ));
        }

        return $counts;
    }

    /**
     * family_member表
     */
    public function findFamilyMembers($userId)
    {
        return $this->getDao('family_member_dao')->findFamilyMembers($userId);
    }

    /**
     * edu_experience表
     */
    public function findEduExperiences($userId)
    {   
        return $this->getDao('edu_experience_dao')->findEduExperiences($userId);
    }

    /**
     * work_experience表
     */
    public function findWorkExperiences($userId)
    {
        return $this->getDao('work_experience_dao')->findWorkExperiences($userId);
    }

    /**
     * other_info表
     */
    public function getOtherInfo($userId)
    {
        return $this->getDao('other_info_dao')->get($userId);
    }
    
    public function searchBasicInfo($conditions)
    {   
        $conditions = array_filter($conditions);
        if (!isset($conditions['keyword'])) {
            unset($conditions['key']);
        } else {
            $conditions[$conditions['key']] = $conditions['keyword'];
            unset($conditions['key']);
            unset($conditions['keyword']);
        }
        
        $mysql = '';
        foreach ($conditions as $key => $value) {
            if ($key == 'trueName')
            {
                $mysql .= $key .' LIKE ' .'\'' .'%' .$value .'%' .'\'' .' AND ';
            } else {
                $mysql .= $key .'=\'' .$value .'\'' .' AND ';
            }
        }
        $mysql = rtrim($mysql,' AND ');
        return $this->getDao('user_search_dao')->searchBasicInfo($mysql);
    }

    public function validate($user)
    {
        if(empty($user['basic']['number'])) {
            throw new \Exception("请输入工号"); 
        }
        $number = $this->checkNumberForCreate($user['basic']['number']);
        if (!empty($number) || !preg_match('/^\d{4}$/', $user['basic']['number'])) {
            throw new \Exception("工号已经存在或者输入格式不正确");
        }

        if(empty($user['basic']['trueName'])) {
            throw new \Exception("请输入姓名"); 
        }

        if(empty($user['basic']['rank'])) {
            throw new \Exception("请输入职级");
        }
        if(empty($user['basic']['phone']) || !preg_match("/^1[3|4|5|7|8]\d{9}$/", $user['basic']['phone'])) {
            throw new \Exception("手机号输入有误");
        }
        if(!preg_match("/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/", $user['basic']['email'])){
            throw new \Exception("邮箱格式不正确"); 
        } 
        if(empty($user['basic']['professionTitle'])) {
            throw new \Exception("请输入职称");
        }
        if(empty($user['basic']['joinTime'])) {
            throw new \Exception("请输入入职时间"); 
        }
    }

    protected function checkIdCard($id)
    {
        $len = strlen($id);
        if ($len != 18) {
            return 0;
        }

        $a = str_split($id,1);
        $w = array(7,9,10,5,8,4,2,1,6,3,7,9,10,5,8,4,2);
        $c = array(1,0,'X',9,8,7,6,5,4,3,2);
        $sum = 0;
        for ($i=0;$i<17;$i++){
            $sum = $sum + $a[$i] * $w[$i];
        }

        $r = $sum%11;
        $res = $c[$r];
        //echo "校验位是: ".$res;
        if ($res == $a[17]) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * user_dao,user_basic_dao,family_member_dao
     * work_experience_dao,confirm_person,edu_experience_dao
     * other_info
     */
    protected function getDepartmentService()
    {
        $userKernel = $this->container->get('biz_kernel');

        return $userKernel['department_service'];
    }

    protected function getDao($dao)
    {
        $userKernel = $this->container;

        return $userKernel[$dao];
    }
}
