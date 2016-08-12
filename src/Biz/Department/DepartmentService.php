<?php 

namespace Biz\Department;

interface DepartmentService
{
    public function addDepartment($department);

    public function findDepartments();

    public function deleteDepartment($id);

    public function getDepartment($id);

    public function updateDepartment($id, $fields);

}