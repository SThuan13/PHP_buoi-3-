<?php
class Animal 
{
  protected $name;
  protected $hunt = false;

  public function __construct($name, $hunt)
  {
    $this->name = $name ;
    $this->hunt = $hunt ;
  }

  public function makeSound()
  {
    
  }

  public function doesHunting()
  {
    if ( $this->hunt )
    {
      return true ;
    }
    else 
    {
      return false ; 
    }
  }
}

class Dog extends Animal 
{
  public function __construct($name, $hunt)
  {
    parent::__construct($name, $hunt) ;
  }

  public function makeSound()
  {
    return "Woff, woff";
  }

}

class Tiger extends Animal 
{
  public function __construct($name, $hunt)
  {
    parent::__construct($name, $hunt) ;
  }

  public function makeSound()
  {
    return "Grrr, grrr";
  }

  public function doesHunting()
  {
    if (parent::doesHunting())
    {
      return "{$this->name} does hunting!";
    }
  }
}

$dog = new Dog("Mike" , false );
echo $dog->makeSound();
echo "<br>";
echo $dog->doesHunting();
echo "<br>";

$tiger = new Tiger("Tibr" , true );
echo $tiger->makeSound();
echo "<br>";
echo $tiger->doesHunting();
?>