<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        //gọi từ model
        $cat = new Category();
        $cat -> hello();


        return view('welcome',[
            'name'=>'bui dao anh van',
            'phone'=>'0987654321',
            'data'=>['11','22','33','44']
        ]);
    }
}
