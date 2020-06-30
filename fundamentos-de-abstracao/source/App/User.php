<?php


namespace Source\App;


class User
{
    private $firsName;
    private $lastName;

    /**
     * User constructor.
     * @param $firsName
     * @param $lastName
     */
    public function __construct($firsName, $lastName)
    {
        $this->firsName = $firsName;
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getFirsName()
    {
        return $this->firsName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }


}