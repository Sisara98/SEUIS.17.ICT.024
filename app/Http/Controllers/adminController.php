<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class adminController extends Controller
{
    public function addadmin(Request $req){
        $data = new Admin;

        $data->name = $req->name;
        $data->username = $req->uname; 
        $data->dob = $req->dob; 
        $data->email = $req->email;
        $data->tel = $req->tel; 
        $data->nic = $req->nic; 
        $data->gender = $req->gender; 
        $data->password = $req->pass;

        $data->save();
        return redirect('admin'); 
    }
    public function getdata(){
        $data = Admin::all();
        return view('fetchdata',['data' => $data]);
    }
    public function delete($id){
        $data = Admin::find($id);
        $data->delete();

        return redirect('fetch');
    }

    public function edit($id){
        $data = Admin::find($id);

        return view('update', ['data'=> $data]);
    }

    public function update(Request $req){
        $data = Admin::find($req->id);

        $data->name = $req->name;
        $data->username = $req->uname; 
        $data->dob = $req->dob; 
        $data->email = $req->email;
        $data->tel = $req->tel; 
        $data->nic = $req->nic; 
        $data->gender = $req->gender; 
        $data->password = $req->pass;


        $data->save();
        return redirect('fetch');
    }
}
