<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\login;

class Home extends Controller
{
    // public function index(){
    //     return view('home');
    // }

    // public function about(){
    //     return view('about');
    // }

    // public function contact(){
    //     return view('contact');
    // }

    public function index(){
        return view('login');
    }

    public function store(Request $request){
         $data = new login;
         $data->Name = $request['name'];
         $data->Email =$request['email'];
         $data->address = $request['address'];
         $data->city = $request['city'];
         $data->gender =$request['gender'];
         $data->password = $request['password'];
         $data->status = $request['status'];
         $data->save();

         return redirect()->back()->with('login');

    }


    public function view(){
         $view = login::all();

         return view('customer' , compact('view'));
    }


    public function dlt($id){
        login::destroy($id);
         
        return back();
    }

    public function edit($id){
 
        $edit = login::find($id);

        return view('edit', compact('edit'));


    }

    public function update_data(Request $request , $id){

        $edit = login::find($id);
        
         $edit->Name = $request['name'];
         $edit->Email =$request['email'];
         $edit->address = $request['address'];
         $edit->city = $request['city'];
         $edit->gender =$request['gender'];
         $edit->status = $request['status'];
         $edit->save();

         return redirect('customer');


    }

}
