<?php


namespace Source\Interpretation;


class User
{

    private $firsName;
    private $lastName;
    private $email;

    /**
     * User constructor.
     * @param $firsName
     * @param $lastName
     * @param $email
     */
    public function __construct($firsName, $lastName, $email)
    {
        $this->firsName = $firsName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function __clone()
    {
        $this->firsName = null;
        $this->lastName = null;
        echo '<p style="color:darkblue">Clonou!</p>';
    }

    public function __destruct()
    {
        var_dump($this);
        echo "<p style=\"color:red\">O objeto {$this->firsName} foi destruído!</p>";
    }

    /**
     * @param mixed $firsName
     */
    public function setFirsName($firsName)
    {
        $this->firsName = $firsName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

}