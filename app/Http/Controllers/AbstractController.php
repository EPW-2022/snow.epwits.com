<?php

namespace App\Http\Controllers;

use App\Models\Abstrak;
use App\Models\User;
use Illuminate\Http\Request;

class AbstractController extends Controller
{
    public function store(Request $request){
        
        $validatedData=$request->validate([
            "file"=>'required|mimes:pdf|max:2048'
        ]);

        

        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        $tujuan_upload = 'abstrak';
        $file->move($tujuan_upload,$file->getClientOriginalName());

        

        Abstrak::where('user_id', auth()->user()->id)->update([
			'filename' => $nama_file
		]);

        //if ketika locked false, masih 
        return redirect ('/dashboard')->with('sukses', 'Databerhasil disimpan');
    }

    public function lock(){
        Abstrak::where('user_id', auth()->user()->id)->update([
			'is_locked' => '1'
		]);
        return redirect ('/dashboard');
    }
    
}
