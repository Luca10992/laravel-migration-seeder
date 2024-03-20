<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $trains = Train::select('*')->where('arrive_date', '<=' , '2024-03-21')->get();
        return view("home", compact("trains"));
    }
}