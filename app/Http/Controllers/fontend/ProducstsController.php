<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProducstsController extends Controller
{
    public function index()
    {
        return view('fontend.products') ;
    }
}
