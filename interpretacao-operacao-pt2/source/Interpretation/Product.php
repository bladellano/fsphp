<?php


namespace Source\Interpretation;


class Product
{
    public $name;
    private $price;
    private $data;

    public function __set($name,$value)
    {
        $this->notFoud($name,$value);
        $this->data[$name]= $value;
    }

    public function __get($name)
    {
        if(!empty($this->data[$name])){
            return $this->data[$name];
        }else {
            $this->notFoud(__FUNCTION__,$name);
        }
    }

    public function handler($name,$price)
    {
    $this->name = $name;
    $this->price = number_format($price,"2",".",",");

    }

    public function notFoud($method,$name)
    {
        echo "<p style='color:red'>{$method}: A propriedade {$name} não existe em ".__CLASS__."</p>";
    }

}