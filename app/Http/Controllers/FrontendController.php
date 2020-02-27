<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pembantu;
class FrontendController extends Controller
{
    public function index(){

        $pembantu = pembantu::orderBy('created_at','desc')->take(3)->get();

        return view('backend.index',compact('pembantu'));
    }
}
