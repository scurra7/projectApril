<?php
namespace Itb;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Itb\Login;
use Itb\User;
use Itb\Member;

class MemberController
{
    /**
     * render the days page template
     */

    /**
     * render the About page template
     */



    public function editMemberTableDisplayAction(Request $request, Application $app)
    {

       $member = Member::getAll();


        $argsArray = [
            'members' => $member
        ];

        $templateName = 'editMember';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }









    public function editMemberDisplayAction(Request $request, Application $app, $id)
    {

        $memberRow = Member::getOneById($id);


        $argsArray = [
            'memberRow' => $memberRow,
        ];
        $app['session']->set('user', array('id' => $id));

        $templateName = 'editMemberRow';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    public function editMemberDetailsAction(Request $request, Application $app)
    {
        $user = $app['session']->get('user');
        $id = $user['id'];


        $paramsPost = $request->request->all();
        $id = $paramsPost['id'];
        $currentBeltGrade = $paramsPost['currentBeltGrade'];
        $currentStatus = $paramsPost['currentStatus'];
        $nextGrade = $paramsPost['nextGrade'];
        $nextBeltGradeSyllabus = $paramsPost['nextBeltGradeSyllabus'];
        $requireStatus = $paramsPost['requireStatus'];
        $name = $paramsPost['name'];

        $id = filter_var($id, FILTER_SANITIZE_STRING);
        $currentBeltGrade  = filter_var($currentBeltGrade, FILTER_SANITIZE_STRING);
        $currentStatus = filter_var($currentStatus, FILTER_SANITIZE_STRING);
        $nextGrade = filter_var($nextGrade, FILTER_SANITIZE_STRING);
        $nextBeltGradeSyllabus = filter_var($nextBeltGradeSyllabus, FILTER_SANITIZE_STRING);
        $requireStatus = filter_var($requireStatus, FILTER_SANITIZE_STRING);
        $name = filter_var($name, FILTER_SANITIZE_STRING);



        $member = new Member();
        $member->setId($id);
        $member->setCurrentBeltGrade($currentBeltGrade);
        $member->setCurrentStatus($currentStatus);
        $member->setNextGrade($nextGrade);
        $member->setNextBeltGradeSyllabus($nextBeltGradeSyllabus);
        $member->setRequireStatus($requireStatus);
        $member->setName($name);

        $succesfullUpdate = Member::update($member);

        $member = Member::getAll();

        $argsArray = [
            'text' => 'Update was succesfull',
            'members' => $member,
        ];

        $templateName = 'editMember';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    public function createMemberAction(Request $request, Application $app)
    {




        $argsArray = [

        ];


        $templateName = 'createMember';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }


    public function newMemberAction(Request $request, Application $app)
    {

        $paramsPost = $request->request->all();
        $id = $paramsPost['id'];
        $currentBeltGrade = $paramsPost['currentBeltGrade'];
        $currentStatus = $paramsPost['currentStatus'];
        $nextGrade = $paramsPost['nextGrade'];
        $nextBeltGradeSyllabus = $paramsPost['nextBeltGradeSyllabus'];
        $requireStatus = $paramsPost['requireStatus'];
        $name = $paramsPost['name'];

        $id = filter_var($id, FILTER_SANITIZE_STRING);
        $currentBeltGrade  = filter_var($currentBeltGrade, FILTER_SANITIZE_STRING);
        $currentStatus = filter_var($currentStatus, FILTER_SANITIZE_STRING);
        $nextGrade = filter_var($nextGrade, FILTER_SANITIZE_STRING);
        $nextBeltGradeSyllabus = filter_var($nextBeltGradeSyllabus, FILTER_SANITIZE_STRING);
        $requireStatus = filter_var($requireStatus, FILTER_SANITIZE_STRING);
        $name = filter_var($name, FILTER_SANITIZE_STRING);



        $member = new Member();
        $member->setId($id);
        $member->setCurrentBeltGrade($currentBeltGrade);
        $member->setCurrentStatus($currentStatus);
        $member->setNextGrade($nextGrade);
        $member->setNextBeltGradeSyllabus($nextBeltGradeSyllabus);
        $member->setRequireStatus($requireStatus);
        $member->setName($name);



        $succesfullUpdate = Member::insert($member);

        $member = Member::getAll();

        $argsArray = [
            'text' => 'Insert was succesfull',
            'members' => $member,
        ];

        $templateName = 'editMember';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }


    public function deleteMemberTableDisplayAction(Request $request, Application $app)
    {

        $member = Member::getAll();


        $argsArray = [
            'members' => $member,
        ];

        $templateName = 'deleteMember';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    public function deleteMemberAction(Request $request, Application $app, $id)
    {

        $deleteSuccesfull = Member::delete($id);

        $members = Member::getAll();

        $argsArray = [
            'text' => 'Delete was successfull',
            'members' => $members
        ];


        $templateName = 'deleteMember';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }




}