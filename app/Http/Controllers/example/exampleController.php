<?php

namespace App\Http\Controllers\example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class exampleController extends Controller
{
    public function index(){
        $nama = "© Copyright Muhammad Andra Ariesfi";
        $data = ["namasaya"=> $nama];
        return view("example.example",$data);
    }
}
