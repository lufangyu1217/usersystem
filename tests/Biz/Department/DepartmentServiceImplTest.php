<?php

use Codeages\Biz\Framework\UnitTests\BaseTestCase;

class DepartmentServicrImplTest extends BaseTestCase
{
    private $department = array(
            'name' =>'技术部',
            'amount' => 0
    );

    public function testAddDepartment()
    {
        $department = $this->department;
        $dataDepartment = $this->getDepartmentService()->addDepartment($department);
        
        $this->assertEquals($department['name'], $dataDepartment['name']);
        $this->assertEquals($department['amount'], $dataDepartment['amount']);
    }

    public function testFindDepartments()
    {
        $departments = array(
            'name' =>'测试部',
            'amount' => 0,
        );
        $datadepartments = $this->getDepartmentService()->addDepartment($departments);
        
        $department = $this->department;
        $dataDepartment = $this->getDepartmentService()->addDepartment($department);
        
        $findDepartment = $this->getDepartmentService()->findDepartments();
        
        $this->assertEquals($department['name'],$findDepartment[1]['name']);
        $this->assertEquals($department['amount'],$findDepartment[1]['amount']);
        $this->assertEquals($departments['name'],$findDepartment[0]['name']);
        $this->assertEquals($departments['amount'],$findDepartment[0]['amount']);

    }

    public function testDeleteDepartment()
    {
        $department = $this->department;
        $dataDepartment = $this->getDepartmentService()->addDepartment($department);
        
        $deleteDataDepartment = $this->getDepartmentService()->deleteDepartment(1);

        $this->assertNull($deleteDataDepartment['name']);
        $this->assertNull($deleteDataDepartment['amount']);
    }

    public function testUpdateDepartment()
    {
        $department = $this->department;
        $dataDepartment = $this->getDepartmentService()->addDepartment($department);

        $updateDataDepartment = $this->getDepartmentService()->updateDepartment(1, array(
                'name'=>'测试部',
                'amount'=>1,
        ));

        $this->assertNotSame($department['name'],$updateDataDepartment['name']);
        $this->assertNotSame($department['amount'],$updateDataDepartment['amount']);
    }
    
    protected function getDepartmentService()
        {
            return self::$kernel['department_service'];
        }
}