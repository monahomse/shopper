<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MicroController extends Controller
{
    //

    public function index(){
        // DB::table('product')->where();
    }

    public function show ($id){
        DB::table('product')->where('id' , '=' , $id);
    }
}
