<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class categoryController extends Controller
{
    public function create1(){
        return view('category');
    }
    
    function adddata(Request $req)
    {
        $Category =$req->validate([
            'category' =>'required|max:255'
        ]);
       $Category=new category;
       $Category->category=$req->category;
       $Category->save();
       return redirect('category');

    }
}

