<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\Restaurant;
class RestoController extends Controller
{

    function index(){
      return view('home');
    }

    function list(){
      $data=Restaurant::all();
      return view('list',['data'=>$data]);

    } 

    function add(Request $req){
       // return $request->input();
      // return view('add');
      $resto = new Restaurant;
      $resto->name=$req->input('name');
      $resto->email=$req->input('email');
      $resto->address=$req->input('address');
      $resto->save();
      //session flash
      $req->session()->flash('status',"New Restaurant Record Submitted Successfully");
      //redirect it to list view after successfull submission
      return redirect('list');  
    }

    function delete($id){
          Restaurant::find($id)->delete();
          Session()->flash('status',"Restaurant Record Successfully deleted..");
          return redirect('list');
    }

    function edit($id){
      $data=Restaurant::find($id);
      return view('edit',['data'=>$data]);
    }

    function update(Request $req){
      // return $request->input();
     // return view('add');
     $resto = Restaurant::find($req->input('id'));
     $resto->name=$req->input('name');
     $resto->email=$req->input('email');
     $resto->address=$req->input('address');
     $resto->save();
     //session flash
     $req->session()->flash('status',"Record Updated Successfully");
     //redirect it to list view after successfull submission
     return redirect('list');  
   }

    function search(){
      return view('search');
    }
   
    function login(){
      return view('login');
    }

    function register(){
      return view('register');
    }

}
