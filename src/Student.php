<?php
/**
 * Created by PhpStorm.
 * User: Steve Curran
 * Date: 08/04/2016
 * Time: 14:19
 */

namespace Itb;

use Mattsmithdev\PdoCrud\DatabaseTable;

class Student extends DatabaseTable
{
    private $id;
    private $surname;
    private $firstName;
    private $joinedClub;
    private $lastGrading;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getJoinedClub()
    {
        return $this->joinedClub;
    }

    /**
     * @param mixed $joinedClub
     */
    public function setJoinedClub($joinedClub)
    {
        $this->joinedClub = $joinedClub;
    }

    /**
     * @return mixed
     */
    public function getLastGrading()
    {
        return $this->lastGrading;
    }

    /**
     * @param mixed $lastGrading
     */
    public function setLastGrading($lastGrading)
    {
        $this->lastGrading = $lastGrading;
    }

    /**
     * @return mixed
     */
    public function getCurrentGrade()
    {
        return $this->currentGrade;
    }

    /**
     * @param mixed $currentGrade
     */
    public function setCurrentGrade($currentGrade)
    {
        $this->currentGrade = $currentGrade;
    }
    private $currentGrade;
}