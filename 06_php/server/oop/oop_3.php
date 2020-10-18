<?php

class User
{
    private $name;
    private $age;

    // コンストラクタ
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    
    
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
    }

        
    public function selfIntroduction(){
        echo '私の名前は' . $this->name . 'です。今年で' . $this->age . '歳になります<br>';
    }
}

$bob = new User('Bob', 20);
$bob->setName('Tom');

echo $bob->getName();
$bob->setAge(21);

echo $bob->getAge();

$bob->selfIntroduction();

