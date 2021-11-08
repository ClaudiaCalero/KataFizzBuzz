<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class StudentTest {
    public function test_can_save_on_db() {
        $student = new Student();
        $student->save();
    }
}