<?php 
class student{
  public $id;
  public $name;
  public $class;


  function setid($id){
    $this->id = $id;
  }

  function setName($name){
    $this->name = $name;
  }

  function setClass($class){
    $this->class = $class;
  }

  function getId(){
       return $this->id ;
  }

   function getname(){
       return $this->name ;
  }

   function getclass(){
       return $this->class;
  }
}

$stu1= new student();
$stu1->setid(1);
$stu1->setName("pappu");
$stu1->setClass(12);

echo "ID: ". $stu1->getId();
echo "<br>";

echo "Name: " . $stu1->getname();
echo "<br>";

echo "Class: " . $stu1->getclass();
echo "<br>";












?>