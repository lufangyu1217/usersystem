<?php 

namespace Biz\Department\Impl;

use Biz\Department\DepartmentService;

class DepartmentServiceImpl implements DepartmentService
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function addDepartment($fields)
    {
        $department = $this->getDepartmentDao()->getByName($fields['name']);
        
        if (!empty($department)) {
            throw new \Exception('该部门名字已经存在。');
        }

        return $this->getDepartmentDao()->create($fields);
    }

    public function findDepartments()
    {   
       return $this->getDepartmentDao()->find();
    }

    public function deleteDepartment($id)
    {
        return $this->getDepartmentDao()->delete($id);
    }

    public function getDepartment($id)
    {
        return $this->getDepartmentDao()->get($id);
    }

    public function updateDepartment($id, $fields)
    {
        return $this->getDepartmentDao()->update($id, $fields);
    }

    protected function getDepartmentDao()
    {
        $systemKernel = $this->container;

        return $systemKernel['department_dao'];
    }
}