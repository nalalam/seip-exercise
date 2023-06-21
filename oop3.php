<?php


// class A {
//     public $p1 ='public property';
//     public $p2 ='private property';
//     public $p3 ='protected property';
// }

// class B extends A {
//     public function accessProtectedProperty(){
//         return $this->p3;
//     }

// }
// $classB =new B;
// echo $classB->p1;
// echo $classB->accessProtectedProperty();

// trait DB {
//     public function connect()
//     {
//         return 'connect to db';
//     }
// }
// trait Notification {
//     public function sent()
//     {
//         return 'sending notification';
//     }
// }
// class Student
// class Base {
//     public function sayHello() {
//         echo 'Hello ';
//     }
// }

// trait SayWorld {
//     public function sayHello() {
//         parent::sayHello();
//         echo 'World!';
//     }
// }

// class MyHelloWorld extends Base {
//     use SayWorld;
// }

// $o = new MyHelloWorld();
// $o->sayHello();

// trait ezcReflectionReturnInfo {
// function getReturnType() { /*1*/ }
// function getReturnDescription() { /*2*/ }
// }

// class ezcReflectionMethod extends ReflectionMethod {
// use ezcReflectionReturnInfo;
// /* ... */
// }

// class ezcReflectionFunction extends ReflectionFunction {
// use ezcReflectionReturnInfo;
// /* ... */
// }

trait message1 {
    public function msg1() {
        echo "OOP is fun! ";
      }
    }
    
    class Welcome {
      use message1;
    }
    
    $obj = new Welcome();
    $obj->msg1();
    