<?php
// method chaining
class Student {
    public $name;
    public $address;
    public $email;
    public $phone;

    public function setName($name)
    {
        $this-> name = $name;
        return $this;
    }
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    public function getStudent()
    {
        $studentInfo = [
            'name'=>$this->name,
            'address'=>$this->address,
            'phone'=>$this->phone,
            'email'=>$this->email
        ];
        return $studentInfo;
    }
}

$studentObj = new Student;
$studentInfo = $studentObj->setName('Mr.X')
            ->setAddress('uttara')
            ->setEmail('uttara@bd.com')
            ->setPhone('+880')
            // ->setAddress('')
            ->getStudent();
echo'<pre>';
var_dump($studentInfo);