<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Common\ArrayToolkit;
use AppBundle\Common\Paginator;
use AppBundle\Controller\UserBaseController;

class LeaderController extends UserBaseController
{
    public function listPresentAction(Request $request)
    {
        $conditions = $request->query->all();
        $conditions['status'] = 'on';
        $conditions['departmentId'] = $this->getUser()['departmentId'];

        $list = $this->listUsers($conditions);

        return $this->render('AppBundle:Leader:list/list-user.html.twig', array(
            'status' => 'on',
            'users' => $list['users'],
            'paginator' => $list['paginator']
        ));
    }

    public function listDemissionAction(Request $request)
    {
        $conditions = $request->query->all();
        $conditions['departmentId'] = $this->getUser()['departmentId'];
        $conditions['status'] = 'off';

        $list = $this->listUsers($conditions);

        return $this->render('AppBundle:Leader:list/list-user.html.twig', array(
            'status' => 'off',
            'users' => $list['users'],
            'paginator' => $list['paginator']
        ));
    }

    public function showBasicAction(Request $request, $id)
    {   
        $basic = $this->getUserService()->getBasic($id);
        return $this->render('AppBundle:Leader:show/show-basic-info.html.twig', array(
            'type' => 'basic',
            'basic' => $basic,
        ));
    }

    public function showFamilyMembersAction(Request $request, $id)
    {
        $familyMembers = $this->getUserService()->findFamilyMembers($id);

        return $this->render('AppBundle:User:show/show-family-info.html.twig', array(
            'userId' => $id,
            'type' => 'family',
            'familyMembers' => $familyMembers,
        ));
    }

    public function showEduExperiencesAction(Request $request, $id)
    {   
        $eduExperiences = $this->getUserService()->findEduExperiences($id);

        return $this->render('AppBundle:User:show/show-learn-info.html.twig', array(
            'userId' => $id,
            'type' => 'learn',
            'eduExperiences' => $eduExperiences,
        ));
    }

    public function showWorkExperiencesAction(Request $request, $id)
    {        
        $workInfos = $this->getUserService()->findWorkExperiences($id);

        return $this->render('AppBundle:User:show/show-work-info.html.twig', array(
            'userId' => $id,
            'type' => 'work',
            'workInfos' => $workInfos,
        ));
    }

    public function showOtherInfoAction(Request $request, $id)
    {   
        $otherInfo = $this->getUserService()->getOtherInfoByUserId($id);

        return $this->render('AppBundle:User:show/show-other-info.html.twig', array(
            'type' => 'other',
            'otherInfo' => $otherInfo,
        ));
    }
}