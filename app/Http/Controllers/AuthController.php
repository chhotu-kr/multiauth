<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;

class AuthController extends Controller
{
    //

    public function userSignin(Request $request){

        if($request->isMethod('post')){
            $request->validate([
                'name'=>'required',
                'contact'=>'required |unique:users',
                'email'=>'required',
                'password'=>'required |min:8',
            ]);

            $data= new User();
            $data->name=$request->name;
            $data->contact=$request->contact;
            $data->email=$request->email;
            $data->password=Hash::make($request->password);
            $data->save();

            return redirect()->route('user.login');
        }

        else{
            return view('user.userregister');
        }

    }

    public function userLogin(Request $request){
        if($request->isMethod('post')){
            $request->validate([
                'contact'=>'required',
                'password'=>'required',
            ]);

            $auth=$request->only('contact','password');

            if(Auth::guard('web')->attempt($auth)){
                return redirect()->route('user.dashboard');
            }
            else{
                return redirect()->back();
            }
        }

        return view("user.userlogin");
    }

    public function logout(Request $req){
       

        Auth::guard('web')->logout();

        return redirect()->route("user.login");
    }

    public function adminSignin(Request $req){
       if($req->isMethod('post')){
        $req->validate([
            'name'=>'required',
                'contact'=>'required',
                'email'=>'required  |unique:admins',
                'password'=>'required |min:8',
        ]);

        $admin=new Admin();
        $admin->name=$req->name;
        $admin->contact=$req->contact;
        $admin->email=$req->email;
        $admin->password=Hash::make($req->password);

        $admin->save();

        return redirect()->route('admin.login');
       
       }
       else{
        return view('admin.register');
       }

       
    }

    public function adminLogin(Request $request){
        if($request->isMethod('post')){
            // $request->validate([
            //     'name'=>'required',
            //     'contact'=>'required',
            //     'email'=>'required  |unique:admins',
            //     'password'=>'required |min:8', 
            // ]);

            $auth=$request->only('email','password');

            if(Auth::guard('admin')->attempt($auth)){
                return redirect()->route('admin.dashboard');
            }
            else{
                return redirect()->back();
            }

            
        }

        return view('admin.login');
    }

    public function adminLogout(){

        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }


    public function index(){
        $data['user']=User::all();

        return view('admin.manageUser',$data);
    }

    public function create(){
        $data['user']=User::all();
        return view('admin.insertuser',$data);
    }

    public function store(Request $request){
        $data=new User();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->contact=$request->contact;
        $data->password=Hash::make($request->passsword);

        $data->save();

        return  redirect()->route('manageuser.admin');
    }

    public function edit($id){
        $data['user']=User::find($id);

        return view('admin.edituser',$data);
    }

    public function update(Request $request,$id){
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->contact=$request->contact;
        $user->password=$request->password;

        $user->save();

        return  redirect()->route('manageuser.admin');
    }

    public function destroy($id){
        $data=User::find($id);
        $data->delete(); 
        return  redirect()->route('manageuser.admin');
    }
   
}
