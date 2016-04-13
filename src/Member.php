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
    private $id;
    private $currentBeltGrade;
    private $currentStatus;
    private $nextGrade;
    private $nextBeltGradeSyllabus;
    private $requireStatus;
    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
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
    public function getCurrentBeltGrade()
    {
        return $this->currentBeltGrade;
    }

    /**
     * @param mixed $currentBeltGrade
     */
    public function setCurrentBeltGrade($currentBeltGrade)
    {
        $this->currentBeltGrade = $currentBeltGrade;
    }

    /**
     * @return mixed
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

    /**
     * @param mixed $currentStatus
     */
    public function setCurrentStatus($currentStatus)
    {
        $this->currentStatus = $currentStatus;
    }

    /**
     * @return mixed
     */
    public function getNextGrade()
    {
        return $this->nextGrade;
    }

    /**
     * @param mixed $nextGrad
     */
    public function setNextGrade($nextGrade)
    {
        $this->nextGrade = $nextGrade;
    }

    /**
     * @return mixed
     */
    public function getNextBeltGradeSyllabus()
    {
        return $this->nextBeltGradeSyllabus;
    }

    /**
     * @param mixed $nextBeltGradeSyllabus
     */
    public function setNextBeltGradeSyllabus($nextBeltGradeSyllabus)
    {
        $this->nextBeltGradeSyllabus = $nextBeltGradeSyllabus;
    }

    /**
     * @return mixed
     */
    public function getRequireStatus()
    {
        return $this->requireStatus;
    }

    /**
     * @param mixed $requireStatus
     */
    public function setRequireStatus($requireStatus)
    {
        $this->requireStatus = $requireStatus;
    }



}