<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\simpleData;

class control1 extends Controller
{
    //

    public function index(){
        return view('welcome', ['variables' => simpleData::where('is_complete', 0)->get()]);
    }

    public function saveItem(Request $request){

        $var = new SimpleData();

        $var-> nama = $request->name;
        $var-> email = $request->email;
        $var-> is_complete = 0;
        $var->save();

        return redirect('/');
    }

    public function complete(simpleData $id){

        $id-> is_complete = 1;
        $id->save();

        return redirect('/');
    }
}
