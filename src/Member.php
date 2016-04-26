<?php
/**
 * Created by PhpStorm.
 * User: Steve Curran
 * Date: 23/03/2016
 * Time: 15:02
 */

namespace Itb;


use Mattsmithdev\PdoCrud\DatabaseTable;

class Member extends DatabaseTable
{
    /**
     * Var
    */
    private $id;
    private $currentBeltGrade;
    private $currentStatus;
    private $nextGrade;
    private $nextBeltGradeSyllabus;
    private $requireStatus;
    private $name;

    /**
     * @return mixed
     * get student Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * set student Name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return mixed
     * get student Id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * set student Name
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     * get student Current Belt Grade
     */
    public function getCurrentBeltGrade()
    {
        return $this->currentBeltGrade;
    }

    /**
     * @param mixed $currentBeltGrade
     * set student Current Grade
     */
    public function setCurrentBeltGrade($currentBeltGrade)
    {
        $this->currentBeltGrade = $currentBeltGrade;
    }

    /**
     * @return mixed
     * get student Current Status
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

    /**
     * @param mixed $currentStatus
     *  set student Current Status
     */
    public function setCurrentStatus($currentStatus)
    {
        $this->currentStatus = $currentStatus;
    }

    /**
     * @return mixed
     * get student Next Grade
     */
    public function getNextGrade()
    {
        return $this->nextGrade;
    }

    /**
     * @param mixed $nextGrad
     * set student Next Grade
     */
    public function setNextGrade($nextGrade)
    {
        $this->nextGrade = $nextGrade;
    }

    /**
     * @return mixed
     * get student Next Belt Grade Syllabus
     */
    public function getNextBeltGradeSyllabus()
    {
        return $this->nextBeltGradeSyllabus;
    }

    /**
     * @param mixed $nextBeltGradeSyllabus
     * set student Next Belt Grade Syllabus
     */
    public function setNextBeltGradeSyllabus($nextBeltGradeSyllabus)
    {
        $this->nextBeltGradeSyllabus = $nextBeltGradeSyllabus;
    }

    /**
     * @return mixed
     * get student Required Status
     */
    public function getRequireStatus()
    {
        return $this->requireStatus;
    }

    /**
     * @param mixed $requireStatus
     *  set student Required Status
     */
    public function setRequireStatus($requireStatus)
    {
        $this->requireStatus = $requireStatus;
    }



}