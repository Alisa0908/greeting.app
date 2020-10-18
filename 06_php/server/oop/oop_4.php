<?php

class Person
{

    private $familyName; // 姓
    private $firstName;  // 名

    public function __construct($familyName, $firstName)
    {
        // ここから違う
        $this->setFamilyName($familyName);
        // setfamilynameメソッド使ってる
        $this->setFirstName($firstName);
    }

    public function getFamilyName()
    {
        return $this->familyName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function selfIntroduction()
    {
        echo '私の名前は' . $this->getFullName() . 'です<br>';
    }

    protected function getFullName()
    {
        return $this->getFamilyName() . ' ' .
            $this->getFirstName();
    }
}

$taro = new Person('田中', '太郎');
$taro->selfIntroduction();

// ここから継承

class Employee extends Person
{

    private $department; //所属部署

    public function setDepartment($department)
    {
        $this->department = $department;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function selfIntroduction()
    {
        parent::selfIntroduction();
        echo '所属する部署は' . $this->getDepartment() . 'です<br>';
    }
}


$taro = new Employee('田中', '太郎');
$taro->setDepartment('教育事業部');
$taro->selfIntroduction();
