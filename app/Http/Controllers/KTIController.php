<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Abstrak;
use Illuminate\Http\Request;

class KTIController extends Controller
{
    public function index()
    {
        if(auth()->user()->step == 1){
            return view('kti.bayar');
        } elseif(auth()->user()->step == 2){
            return view('kti.verifbayar');
        } elseif(auth()->user()->step==3){
            return view('kti.kti');
        } elseif(auth()->user()->step==4){
            return view('kti.ktiterkumpul');
        }
    } 

    public function store(Request $request){
        
        $validatedData=$request->validate([
            "file"=>'required|mimes:pdf,jpeg,png,jpg|max:2048'
        ]);

        

        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        $tujuan_upload = 'buktibayar';
        $file->move($tujuan_upload,$file->getClientOriginalName());

        

        User::where('id', auth()->user()->id)->update([
			'step' => 2
		]);
        Abstrak::where('user_id', auth()->user()->id)->update([
			'filename1' => $nama_file
		]);

        return redirect ('/kti');
    }

    public function storekti(Request $request){
        
        $validatedData=$request->validate([
            "file"=>'required|mimes:pdf|max:2048'
        ]);

        

        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        $tujuan_upload = 'fullKTI';
        $file->move($tujuan_upload,$file->getClientOriginalName());

        

        User::where('id', auth()->user()->id)->update([
			'step' => 4
		]);
        Abstrak::where('user_id', auth()->user()->id)->update([
			'filename2' => $nama_file
		]);

        return redirect ('/kti');
    }

}
