<?php


namespace Source\Related;


class Company
{
    private $company;

    /**
     * @var Address
     */
    private $adresss;

    private $team;
    private $products;

    public function bootCompany($company,$address)
    {
        $this->company = $company;
        $this->adresss = $address;
    }

    public function boot($company,Address $address)
    {
        $this->company = $company;
        $this->adresss = $address;
    }

    public function addTeamMember($job,$firstName,$lastName)
    {
        $this->team[] = new \Source\Related\User($job,$firstName,$lastName);
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }
    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return mixed
     */
    public function getAdresss():Address
    {
        return $this->adresss;
    }

    /**
     * @return mixed
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }


}