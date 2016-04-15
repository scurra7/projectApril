<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/configDatabase.php';

use Itb\User;
use Itb\Login;

/*define('DB_HOST','localhost');
define('DB_USER', 'fred');
define('DB_PASS', 'smith');
define('DB_NAME', 'itb');*/

/*$student = new Student();
$student->setFirstName('david');
$student->setSurname('Grey');
$student->setCurrentStatus('active');
$student->setNextBeltGradingSyllabus('sure');
$student->setCurrentBeltGrade('rainbow');
$student->setRequiredStatus('i guess');
$student->setNextGrading('ok');
$student->setRole(Student::ROLE_ADMIN);*/

$matt = new Login();

$matt->setPassword('001');
$matt->setUsername("admin");
$matt->setRole(Login::ROLE_ADMIN);

$joe = new Login();

$joe->setPassword('002');
$joe->setUsername("student");
$joe->setRole(Login::ROLE_USER);



Login::insert($matt);
Login::insert($joe);

$users = Login::getAll();
var_dump($users);

/*Student::insert($student);
$students = Student::getAll();
var_dump($students);*/