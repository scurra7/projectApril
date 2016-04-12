<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/configDatabase.php';

use Itb\User;
use Itb\Student;

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

$matt->setPassword('1234');
$matt->setRole(User::ROLE_ADMIN);

$joe = new User();

$joe->setPassword('1234');
$joe->setRole(User::ROLE_USER);

$admin = new User();

$admin->setPassword('admin');
$admin->setRole(User::ROLE_ADMIN);

User::insert($matt);
User::insert($joe);
User::insert($admin);
$users = User::getAll();
var_dump($users);

Student::insert($student);
$students = Student::getAll();
var_dump($students);