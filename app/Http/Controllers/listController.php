<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class listController extends Controller
{
    function list(){
        $data=category::all();
        return view('list',['categories'=>$data]);
    }
    function delete($id){
        $data = category::find($id);
        $data->delete();
        return redirect('list');
    }
}
