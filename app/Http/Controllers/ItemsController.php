<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ItemsController extends Controller
{
    //������� ����� add, ������� ����� ������ ���������� ���
    public function add()
    {
        return view('add');
    }
}
