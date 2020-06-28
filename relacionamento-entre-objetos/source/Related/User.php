<?php


namespace Source\Related;


class User
{
    private $job;
    private $firstName;
    private $lasName;

    /**
     * User constructor.
     * @param $job
     * @param $firstName
     * @param $lasName
     */
    public function __construct($job, $firstName, $lasName)
    {
        $this->job = $job;
        $this->firstName = $firstName;
        $this->lasName = $lasName;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job): void
    {
        $this->job = $job;
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
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLasName()
    {
        return $this->lasName;
    }

    /**
     * @param mixed $lasName
     */
    public function setLasName($lasName): void
    {
        $this->lasName = $lasName;
    }

}