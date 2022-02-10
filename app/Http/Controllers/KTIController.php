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
        if(auth()->user()->step <= 4){
            return view('kti.tidaklolos');
        } elseif(auth()->user()->step==5){
            return view('kti.loloskti');
        } elseif(auth()->user()->step==6){
            return view('kti.finalterkumpul');
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

    public function storefinal(Request $request){
        $validatedData=$request->validate([
            "poster"=> 'required|mimes:pdf,jpg,jpeg'
        ]);
        $validatedDataDua=$request->validate([
            "presentasi"=> 'required|mimes:pdf'
        ]);
        $validatedDataTiga=$request->validate([
            "filename5"=> 'required'
        ]);

        $file1=$request->file('poster');
        $nama_file1 = $file1->getClientOriginalName();
        $tujuan_upload1 = 'poster';
        $file1 -> move($tujuan_upload1, $file1->getClientOriginalName());

        $file2=$request->file('presentasi');
        $nama_file2 = $file2->getClientOriginalName();
        $tujuan_upload2 = 'presentasi';
        $file2 -> move($tujuan_upload2, $file2->getClientOriginalName());


        Abstrak::where('user_id', auth()->user()->id)->update([
            'filename3' => $nama_file1,
            'filename4' => $nama_file2,
            'filename5' => $validatedDataTiga["filename5"]
        ]);

        User::where('id', auth()->user()->id)->update([
			'step' => 6
		]);

        return view('kti.finalterkumpul');

        
    }

}
