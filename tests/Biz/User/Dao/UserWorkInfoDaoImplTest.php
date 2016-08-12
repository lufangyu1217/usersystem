<?php

use Codeages\Biz\Framework\UnitTests\BaseTestCase;

class UserWorkInfoDaoImplTest extends BaseTestCase
{   
    public function testAddUser()
    {
    }
    
    public function testGetTableFields()
    {
        $workInfo = array(
            'userId' => 1,
            'startTime' => '1470817352',
            'endTime' => '1470817352',
            'company' => '杭州阔知网络科技有限公司',
            'position' => '程序员',
            'leaveReason' => '回家种田。'
        );

        $work = $this->getWorkExperienceDao()->create($workInfo);

        $fields = $this->getWorkExperienceDao()->getTableFields();

        $this->assertEquals($fields, array_keys($work));
    }

    /**
     * @dataProvider additionProvider
     */
    public function testFindWorkExperiences($data)
    {   
        $this->getUserServiece()->createUser($data);
        $workExperience = $this->getWorkExperienceDao()->findWorkExperiences(1);
        $this->assertEquals($data['work'],$workExperience);
    }

    protected function getUserServiece()
    {
        return self::$kernel['user_service'];
    }

    protected function getWorkExperienceDao()
    {
        return self::$kernel['work_experience_dao'];
    }

    public function additionProvider()
    {
        return [
            [array(
                "basic" => array(
                    "id" => 1,
                    "userId" => 1,
                    "departmentId" => 1,
                    "rank" => "p20",
                    "trueName" => "陆昉宇",
                    "phone" => 13411231234,
                    "email" => "594@qq.com",
                    "gender" => "male",
                    "bornTime" => 1994,
                    "native" => "中国海宁",
                    "nation" => "汉族",
                    "height" => "177cm",
                    "weight" => "55kg",
                    "blood" => "AB",
                    "education" => "博士",
                    "prefession" => "计科",
                    "joinTime" => 1470823339,
                    "marriage" => 0,
                    "residence" => "海宁",
                    "address" => "没考虑",
                    "postcode" => 310000,
                    "IDcard" => 330481199412170055,
                    "professionTitle" => "PHP程序员",
                    "householdType" => "城市",
                    "recordPlace" => "杭州",
                    "formerLaborShip" => "已解除",
                    "hasSick" => "无",
                    "serviceTime" => 6,
                    "expectedSalary" => 10000,
                    "politics" => "群众",
                ),
                "family" => array(
                    array(
                        "id" => 1,
                        "userId" => 1,
                        "member" => "爸爸",
                        "trueName" => "陆昉宇",
                        "age" => 30,
                        "job" => "那几款",
                        "phone" => 13511292312,
                    ),
                    array(
                        "id" => 2,
                        "userId" => 1,
                        "member" => "爸爸",
                        "trueName" => "陆昉宇",
                        "age" => 30,
                        "job" => "那几款",
                        "phone" => 13511292312,
                    )
                ),
                "work" => array(
                    array(
                        "id" => 1,
                        "userId" => 1,
                        "startTime" => 1470823339,
                        "endTime" => 1470823339,
                        "company" => "方法",
                        "position" => "发的",
                        "leaveReason" => "等等",
                    )
                ),
                "education" => array(
                    array(
                        "id" => 1,
                        "userId" => 1,
                        "startTime" => 1470823339,
                        "endTime" => 1470823339,
                        "schoolName" => "你",
                        "profession" => "方法",
                        "position" => "方法",
                    ),
                    array(
                        "id" => 2,
                        "userId" => 1,
                        "startTime" => 1470823339,
                        "endTime" => 1470823339,
                        "schoolName" => "你",
                        "profession" => "方法",
                        "position" => "方法",
                    )
                ),
                "other" => array(
                    "id" => 1,
                    "userId" => 1,
                    "reward" => "覅UN会不会就不喝酒",
                    "selfAssessment" => "和基本和金额为备份和文件",
                )
            )]
        ];
    }
}
