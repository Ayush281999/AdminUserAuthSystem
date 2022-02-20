<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class productlistController extends Controller
{
    function productlist(){
        $data=product::all();
        return view('productlist',['product'=>$data]);
    }
    function delete($id){
        $data = product::find($id);
        $data->delete();
        return redirect('productlist');
    }
}
