<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class userController extends Controller
{
    //
     public function show()
    {
        # code...

        $users = DB::table('users')->get();
        
    
        return view('users', array('users'=>$users));

    }

    public function delete($id)
    {
        # code...
        var_dump($id);
        DB::table('users')
        ->where('id', '=', $id)
        ->delete();
        
    
        return redirect()->route('show');

    }
}
