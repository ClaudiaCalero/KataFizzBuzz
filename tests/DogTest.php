<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Dog;
use App\Cat

class DogTest extends Test Case {
    public function test_Dog_init_whith_name() {
        $lassie = new Dog();
        $result = $lassie->getName();
        $this->assertEquals("lassie", $result)
        }
    } 
    public  test_coancomunicate () {
        $animal = new Dog('lassie');
        $result =$animal->comuunicate();
        $this->assertEquals("guau guau"$result);
    }
        
}