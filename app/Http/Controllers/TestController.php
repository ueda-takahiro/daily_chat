<?php

namespace App\Http\Controllers;

class TestController
{
    public function index()
    {
        $a = 1;
        $b = 2;
        if ($a < $b) {
            $result = new \stdClass();
            $result->message = '$b is larger than $a.';
            return $result;
        }
    }
}
