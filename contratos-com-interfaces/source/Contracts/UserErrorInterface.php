<?php


namespace Source\Contracts;


interface UserErrorInterface
{
    public function setError($erro);
    public function getError();
}