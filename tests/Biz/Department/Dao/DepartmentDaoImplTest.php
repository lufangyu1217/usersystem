<?php

use Codeages\Biz\Framework\UnitTests\BaseTestCase;

class DepartmentDaoImplTest extends BaseTestCase
{
    private $department = array(
            'name' =>'技术部',
            'amount' => 0,
    );

    public function testFind()
    {
        $department = $this->department;
        $dateDepartment = $this->getDepartmentService()->addDepartment($department);

        $dateDepartments =$this->getDepartmentDao()->find();

        $this->assertEquals($department['name'],$dateDepartments[0]['name']);
        $this->assertEquals($department['amount'],$dateDepartments[0]['amount']);
    }

    public function testGtByName()
    {
        $department = $this->department;
        $dateDepartment = $this->getDepartmentService()->addDepartment($department);

        $byNamedataDepartment = $this->getDepartmentDao()->getByName('技术部');

        $this->assertEquals($department['name'],$byNamedataDepartment[0]['name']);
        $this->assertEquals($department['amount'],$byNamedataDepartment[0]['amount']);

    }

    protected function getDepartmentService()
    {
        return self::$kernel['department_service'];
    }

    protected function getDepartmentDao()
    {
        return self::$kernel['department_dao'];
    }
}