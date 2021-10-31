<?php

namespace App\Http\Controllers;

use App\Models\Abstrak;
use Illuminate\Http\Request;

class AbstractController extends Controller
{
    public function store(Request $request){
        $validatedData=$request->validate([
            "file"=>'required|mimes:jpeg,png,jpg|max:2048'
        ]);

        

        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        $tujuan_upload = 'abstrak';
        $file->move($tujuan_upload,$file->getClientOriginalName());

        Abstrak::create([
			'filename' => $nama_file
		]);

        //if ketika locked false, masih 
        return('amazing');
    }

    public function lock(){
        return ('poruska');
    }
    
}
