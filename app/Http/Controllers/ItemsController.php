<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ItemsController extends Controller
{
    //Добавим метод add, который будет просто возвращать вид
    public function add()
    {
        return view('add');
    }
}
