<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Common\ArrayToolkit;

class DepartmentController extends BaseController
{
    public function listAction()
    {
        $departments = $this->getDepartmentService()->findDepartments();

        return $this->render('AppBundle:Department:list.html.twig',array(
            'departments' => $departments
        ));
    }

    public function addAction(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $fields = $request->request->all();
            $this->getDepartmentService()->addDepartment($fields);

            return new JsonResponse(true);
        }

        return $this->render('AppBundle:Department:add-modal.html.twig');
    }

    public function deleteAction(Request $request, $id)
    {   
        $this->getDepartmentService()->deleteDepartment($id);

        return new JsonResponse(true);
    }

    public function editAction(Request $request, $id)
    {
        if ($request->getMethod() == 'POST') {
            $fields = $request->request->all();
            $this->getDepartmentService()->updateDepartment($id, $fields);

            return new JsonResponse(true);
        }

        $department = $this->getDepartmentService()->getDepartment($id);

        return $this->render('AppBundle:Department:edit-modal.html.twig',array(
            'department' => $department,
            'id' => $id,
        ));
    }

    protected function getDepartmentService()
    {
        return $this->biz['department_service'];
    }   

    protected function getUserService()
    {
        return $this->biz['user_service'];
    }
}