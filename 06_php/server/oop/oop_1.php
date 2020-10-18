<?php 
class User 
{
    public $name = 'Bob';
    public $age = 21;

    public function greet($to)
    {
        echo 'こんにちは' . $to . 'さん <br>';
    } 

    public function selfIntroduction()
    {
        // 私の名前はボブです｡今年で21歳です｡
        echo '私の名前は'.$this->name.'です｡';
        // thisをつけることで上の関数を入れてくれる｡
        echo '今年で' . $this->age . '歳になります｡';
    }

}

$user = new User();
$user->selfIntroduction();


// $user->greet('Tom');

// $user->name = 'Tom';
// echo $user->name;
// echo $user->age;

// ※シングルアロー

