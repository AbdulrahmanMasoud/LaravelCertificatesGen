<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadDataController extends Controller
{
    public function uploadForm(){
        return view('pages.uploadFile');
    }

    public function uploadData(Request $req){
        $req->validate([
            'file' => 'required|mimes:json,txt'
            ]);
         $req->file('file')->storeAs('Data','data.json','public');
         return redirect('student');
    }
}
