<?php 
class Catagory
{
public $categoryName;

public function__construct($categoryName)
{
 $this-> catagoryName = $categoryName;
}
public function getCatagory()
 {
    return "Catagory:".$this->$categoryName;
 }
}


class Electronics extends Category
{
 public $brand;
 public function__construct($categoryName,$brand)
 {
    parent::__construct($categoryName);
    $this->brand=$brand;
 }

    
}

class Clothing extends Catagory
{
    public $size;
 public function__construct($categoryName,$size)
 {
     parent::__construct($categoryName);
$this->size = $size;
 }
    
}

public function getProductsDetalis()
{
    return $this->getCatagory().", Size:".$this->size;
}


$mobile = new Electronics ("Electronis","Samsung");                                                                                       $tshirt = new Clothing ("Clothing","Medium") ;

echo $mobile->getProductsDetalis()."<br>";
echo $tshirt->getProductsDetalis()."<br>";

?>