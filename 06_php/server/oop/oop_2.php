<?php
class User
{
    public $name ;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    // これでBobだらけだったのを初期化した

    public function greet($to){
        echo 'こんにちは' . $to . 'さん<br>';
    }

    public function selfIntroduction(){
        echo '私の名前は' . $this->name . 'です。今年で' . $this->age . '歳になります<br>';
    }
}



$bob = new User('Bob', 20);
$bob->selfIntroduction();
$tom = new User('Tom', 21);
$tom->selfIntroduction();
$ken = new User('Ken', 22);
$ken->selfIntroduction();



