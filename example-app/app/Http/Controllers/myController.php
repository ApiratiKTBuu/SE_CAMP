<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    private $myvar = "Hellow world!";
    function __construct() //myController
    {

    }

    public function index(){
        /*
        $data= ['val_a'=>'Hello world!'];
        $data['val_b'] = "Larravel";
        return view('myfolder.myAdminpage',$data);
        */
        //return view('welcome');
        return view('myfolder.home');
    }

    public function store(Request $req){
        $data['myinput'] = $req->input('myinput');
        return view('myroute', $data);
    }

}
