<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Common\ArrayToolkit;
use AppBundle\Common\Import;


class UserController extends BaseController
{
    public function createUserAction(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $fields = $request->request->all();

            $this->getUserService()->createUser($fields);
            
            return $this->redirect($this->generateUrl('admin_user_present_list'));
        }
        return $this->render('AppBundle:User:add-user/add-user.html.twig');        
    }

    public function editUserAction(Request $request, $id)
    {
        $userService = $this->getUserService();

        if ($request->getMethod() == 'POST') {
            $fields = $request->request->all();
            $userService->update($id, $fields);

            return $this->redirect($this->generateUrl('admin_user_present_list'));         
        } 

        $user = $userService->getUser($id);
        $basic = $userService->getBasic($id);
        $familyMembers = $userService->findFamilyMembers($id);
        $eduExperiences = $userService->findEduExperiences($id);
        $workInfos = $userService->findWorkExperiences($id);
        $otherInfo = $userService->getOtherInfo($id);

        return $this->render('AppBundle:User:edit-user/edit-user.html.twig', array(
            'user' => $user,
            'basic' => $basic,
            'familyMembers' => $familyMembers,
            'eduExperiences' => $eduExperiences,
            'workInfos' => $workInfos,
            'otherInfo' => $otherInfo
        ));

    }

    public function listPresentAction(Request $request)
    {
        $conditions = $request->query->all();
        $conditions['status'] = 'on';
        $users = $this->getUserService()->searchBasicInfo($conditions);

        return $this->render('AppBundle:User:list-user/list-user.html.twig',array(
            'status' => 'on',
            'users' => $users
        ));
    }

    public function listDemissionAction(Request $request)
    {
        $conditions = $request->query->all();
        $conditions['status'] = 'off';
        $users = $this->getUserService()->searchBasicInfo($conditions);
        
        return $this->render('AppBundle:User:list-user/list-user.html.twig',array(
            'status' => 'off',
            'users' => $users
        ));
    }

    public function changeJobStatusAction(Request $request, $id, $status)
    {
        if ($request->getMethod() == 'POST') {
            $fields = $request->request->all();

            if ($status == 'on') {
                $this->getUserService()->updateUser($id, array(
                    'status' => 'off',
                    'quitTime' => strtotime($fields['quitTime'])
                ));
            } else {
                $this->getUserService()->updateUser($id, array(
                    'status' => 'on',
                    'joinTime' => strtotime($fields['joinTime'])
                ));
            }

            return new JsonResponse(array('userId'=>$id));
        }

        return $this->render('AppBundle:User:change-jobstatus-modal.html.twig', array(
            'status' => $status,
            'id' => $id
        ));   
    }
    
    public function changeUserRoleAction(Request $request)
    {
        $conditions = $request->query->all();
        $this->getUserService()->updateUser($conditions['id'],array(
                'role' => 'ROLE_ADMIN',
        ));

        return new JsonResponse(true);
    }


    public function showBasicAction(Request $request, $id)
    {   
        $basic = $this->getUserService()->getBasic($id);

        return $this->render('AppBundle:User:show-user/show-basic-info.html.twig',array(
            'type' => 'basic',
            'basic' => $basic,
        ));
    }

    public function showFamilyMembersAction(Request $request, $id)
    {
        $familyMembers = $this->getUserService()->findFamilyMembers($id);

        return $this->render('AppBundle:User:show-user/show-family-info.html.twig',array(
            'userId' => $id,
            'type' => 'family',
            'familyMembers' => $familyMembers,
        ));
    }

    public function showEduExperiencesAction(Request $request, $id)
    {   
        $eduExperiences = $this->getUserService()->findEduExperiences($id);

        return $this->render('AppBundle:User:show-user/show-learn-info.html.twig',array(
            'userId' => $id,
            'type' => 'learn',
            'eduExperiences' => $eduExperiences,
        ));
    }

    public function showWorkExperiencesAction(Request $request, $id)
    {        
        $workInfos = $this->getUserService()->findWorkExperiences($id);

        return $this->render('AppBundle:User:show-user/show-work-info.html.twig',array(
            'userId' => $id,
            'type' => 'work',
            'workInfos' => $workInfos,
        ));
    }

    public function showOtherInfoAction(Request $request, $id)
    {   
        $otherInfo = $this->getUserService()->getOtherInfo($id);

        return $this->render('AppBundle:User:show-user/show-other-info.html.twig',array(
            'type' => 'other',
            'otherInfo' => $otherInfo,
        ));
    }

    public function checkNumberForCreateAction(Request $request)
    {
        $number = $request->query->get('number');
        $user = $this->getUserService()->checkNumberForCreate($number);  
        if (empty($user)) {
            return new JsonResponse(true);
        } else {
            return new JsonResponse(false);
        }
    }

    public function improtAction(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $file = $_FILES['file_stu']['name'];
            $tmpFile = $_FILES['file_stu']['tmp_name'];
            $fileTypes = explode(".", $_FILES['file_stu']['name'] );
            $fileType = $fileTypes[count($fileTypes) - 1];
            
            $import = new Import();

            $import->import($tmpFile);

            return $this->redirect('/admin/users/present');
        }

        return $this->render('AppBundle:User:import.html.twig');
    }

    protected function getUserService()
    {
        return $this->biz['user_service'];
    }
}
