<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\major;

class homecontroller extends Controller
{
    public function index(){
        $majors=major::select("id","title")->take(8)->get();
        return view('front.pages.home.index',compact('majors'));
    }
}
