<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller

{
    //
    public function addCategory(){
    	echo "test"; die;
    	return view('admin.categories.add_category');
    }
}
