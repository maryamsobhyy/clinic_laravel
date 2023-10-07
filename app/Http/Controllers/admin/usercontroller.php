<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class usercontroller extends Controller
{
    //
    public function index (){
        $users=User::paginate(5);
        return view('admin.pages.users',compact('users'));
    }
}
