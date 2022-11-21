<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
        $request->validate([
            'uname'=>'required',
            'upass'=>'required'
        ]);
        print_r($request->toArray());
    }
    public function show_create(){
        $staff=null;
        $title='Create Staff';
        $url1=url('/create');
        $data=compact('title','url1','staff');
        return view('create')->with($data);
    }
    public function create(Request $request){
        $request->validate([
            'name'=>'required',
            'mobile'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required '
        ]);
        $staff=new Staff;
        $staff->name=$request['name'];
        $staff->mobile=$request['mobile'];
        $staff->email=$request['email'];
        $staff->password=$request['password'];
        $staff->save();
        $success='User Created Successfully';
        $data=compact('success');
       return view('create')->with($data);
    }
    public function view(){
       $staff= Staff::all();
       $data=compact('staff');
       return view('list')->with($data);
    }
    public function del($id){
        $staff=Staff::find($id);
        $staff->delete();
        return redirect()->back();
    }
    public function edit($id){
        $staff=Staff::find($id);
        if(is_null($staff)){
            return redirect('list');
        }
        else{
            $title='Staff Update';
            $url1=url('/staff/update')."/".$id;
            $data=compact('url1','staff','title');
            return view('create')->with($data);
        }
   
    }
    public function update($id, Request $request){
       $staff= Staff::find($id);
       $staff->name=$request['name'];
       $staff->mobile=$request['mobile'];
       $staff->email=$request['email'];
       $staff->password=$request['password'];
       $staff->save();
       return view('list');
    }
}
