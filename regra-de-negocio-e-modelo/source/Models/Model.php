<?php


namespace Source\Models;


abstract class Model
{
    /**
     * @var object|null
     */
    protected $data;
    /**
     * @var \PDOException|null
     */
    protected $fail;
    /**
     * @var string|null
     */
    protected $messege;

    /**
     * @return object|null
     */
    public function data(): ?object
    {
        return $this->data;
    }

    /**
     * @return \PDOException|null
     */
    public function fail(): ?\PDOException
    {
        return $this->fail;
    }

    /**
     * @return string|null
     */
    public function messege(): ?string
    {
        return $this->messege;
    }

    protected function create()
    {

    }

    protected function read()
    {

    }

    protected function update()
    {

    }

    protected function delete()
    {

    }
    protected function safe(): ?array
    {

    }
    private function filter()
    {

    }
}