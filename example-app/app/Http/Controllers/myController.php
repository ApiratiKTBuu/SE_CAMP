<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    private $myvar = "Hellow world";
    function __construct() //myController
    {

    }

    public function index(){
        echo $this->myvar;
    }

}
