<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class HomeController extends Controller
{
    //

    public function index(){
        return view('admin.dashboard');
    }

    public function userDashboard(){
        
        return view('user.dashboard');
    }

    public function user_List(){
        $data['user']=User::all();

        return view('user.manageuser',$data);
    }
}
