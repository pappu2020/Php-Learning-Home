<?php
class student{
    public $name;
    public $class;

    function __construct($name,$class){
        $this->name = $name;
        $this->class = $class;

    }

    function getName(){
       return $this->name;

    }
    function getclass()
    {
        return $this->class;
    }
}

$stu1 = new student("pappu","12");
echo "Name: ". $stu1->getname();
echo "<br>";

echo "Class: " . $stu1->getclass();
echo "<br>";

// class Fruit
// {
//     public $name;
//     public $color;

//     function __construct($name,$color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     function get_name()
//     {
//         return $this->name;
//     }

//     function get_color()
//     {
//         return $this->color;
//     }
// }

// $apple = new Fruit("Apple","yellow");
// echo $apple->get_name();
// echo $apple->get_color();


?>