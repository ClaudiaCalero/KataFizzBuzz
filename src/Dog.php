<?php

namespace App

class Dog implements IComunicate {
    private string $name;

    public function __construct(string $name)
     {
         $this->name = $name;

        }
        public function getName() {
            return $this->name;
        }
    }
    public function comunicate () {
        return 'guau guau';
    }
   
}