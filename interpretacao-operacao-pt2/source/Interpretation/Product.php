<?php


namespace Source\Interpretation;


class Product
{
    public $name;
    private $price;
    private $data;

    public function __set($name, $value)
    {
        $this->notFound($name, $value);
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        if (!empty($this->data[$name])) {
            return $this->data[$name];
        } else {
            $this->notFound(__FUNCTION__, $name);
        }
    }

    public function __isset($name)
    {
        $this->notFound(__FUNCTION__, $name);

    }

    public function __call($name, $arguments)
    {
        $this->notFound(__FUNCTION__, $name);
        print_r($arguments);
    }

    public function __toString()
    {
        return "<p>Este é um objeto da classe</p>" . __CLASS__;
    }

    public function handler($name, $price)
    {
        $this->name = $name;
        $this->price = number_format($price, "2", ".", ",");

    }

    public function __unset($name)
    {
        trigger_error(__FUNCTION__ . ": Acesso negado a propriedade {$name}", E_USER_ERROR);
    }

    private function notFound($method, $name)
    {
        echo "<p style='color:red'>{$method}: A propriedade {$name} não existe em " . __CLASS__ . "</p>";
    }

}