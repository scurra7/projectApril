<?php
/**
 * Created by PhpStorm.
 * User: Steve Curran
 * Date: 20/04/2016
 * Time: 17:40
 */

namespace Itb;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class StudentController
{
 public function studentDetailAction(Request $request, Application $app,$id)

 {

     $studentRow = Student::getOneById($id);

     $argsArray = [
         'student' => $studentRow,
     ];

     $templateName = 'studentDetail';
     return $app['twig']->render($templateName . '.html.twig', $argsArray);
 }

}