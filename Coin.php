<?php
class Coin {

private $country;
private $value;
private $yearofmanufacture;
private $material;

function __construct(){

}

public function getCountry()
{
    return $this->country;
}

public function getValue()
{
    return $this->value;
}

public function getYearofmanufacture()
{
    return $this->yearofmanufacture;
}

public function getMaterial()
{
    return $this->material;
}

public function setCountry($country)
{
    $this->country = $country;
}

public function setValue($value)
{
    $this->value = $value;
}

public function setYearofmanufacture($yearofmanufacture)
{
    $this->yearofmanufacture = $yearofmanufacture;
}

public function setMaterial($material)
{
    $this->material = $material;
}






}

?>