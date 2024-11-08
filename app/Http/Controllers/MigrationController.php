<?php

namespace App\Http\Controllers;

use App\Models\baban;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MigrationController extends Controller
{
    public function form():View
    {
        return view('form');
    }

    public function form_submit(Request $request)
    {
        $title = $request->input('title');
        $desc = $request->input('desc');
        $modelObj = new baban();
        $modelObj->title = $title;
        $modelObj->description = $desc;
        $modelObj->save();
        return redirect('form')->with('message','Data inserted');
    }

    public function data_display():View
    {
        $allUsers = Baban::all();
        // dd($allUsers);
        return view('display')->with(['userInfo'=>$allUsers]);
    }
}
