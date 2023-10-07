<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Index;
use Illuminate\Http\Request;
use App\Models\Major;


class indexcontroller extends Controller
{
    public function index (){
        $majors=Major::paginate(5);
        return view('admin.pages.majors',compact('majors'));
    }
}
