<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Leader;
use App\Model\Member;
use App\Models\Abstrak;
use App\Models\Member as ModelsMember;
use App\Models\Member2;

use function PHPUnit\Framework\isNull;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request){
        //tabel user
        $validatedData=$request->validate([
            "namatim"=>'required',
            "username"=>'required|min:6',
            "email"=>'required|email:dns',
            "password"=>'min:6|required_with:conpassword|same:conpassword',
            "conpassword"=>'min:6'
        ]);
        $validatedData['password']=bcrypt($validatedData['password']);
        $user= User::create($validatedData);
        
        
        //tabel leader
        $validatedDataDua=$request->validate([
            "asalsekolah"=>'required',
            "kota"=>'required',
            "namaketua"=>'required',
            "alamat"=>'required',
            "nomorhp"=>'required',
            "nisn"=>'required',
            "tempatlahir"=>'required',
            "tanggallahir"=>'required',
            "foto"=>'required|mimes:jpeg,png,jpg|max:2048',
            "kartupel"=>'required|mimes:jpeg,png,jpg|max:2048',
            "twibbon"=>'required|mimes:jpeg,png,jpg|max:2048'
        ]);

        $foto = $request->file('foto');
        $nama_file = $foto->getClientOriginalName();
        $tujuan_upload = 'foto_ketua';
        $foto->move($tujuan_upload,$foto->getClientOriginalName());

        $kartupel = $request->file('kartupel');
        $nama_file1 = $kartupel->getClientOriginalName();
        $tujuan_upload1 = 'kartupel_ketua';
        $kartupel->move($tujuan_upload1,$kartupel->getClientOriginalName());

        $twibbon = $request->file('twibbon');
        $nama_file2 = $twibbon->getClientOriginalName();
        $tujuan_upload2 = 'twibbon_ketua';
        $twibbon->move($tujuan_upload2,$twibbon->getClientOriginalName());

        $validatedDataDua['user_id']=$user->id;
        $validatedDataDua['foto']=$nama_file;
        $validatedDataDua['kartupel']=$nama_file1;
        $validatedDataDua['twibbon']=$nama_file2;

        Leader::create($validatedDataDua);
        

        //tabel member
        $validatedDataTiga=$request->validate([
            "namaanggota1"=>'required',
            "nisn1"=>'required',
            "tempatlahir1"=>'required',
            "tanggallahir1"=>'required',
            "foto1"=>'mimes:jpeg,png,jpg|max:2048',
            "kartupel1"=>'required|mimes:jpeg,png,jpg|max:2048',
            "twibbon1"=>'required|mimes:jpeg,png,jpg|max:2048'
        ]);
        $foto1 = $request->file('foto1');
        $nama_file3 = $foto1->getClientOriginalName();
        $tujuan_upload3 = 'foto_anggota1';
        $foto1->move($tujuan_upload3,$foto1->getClientOriginalName());

        $kartupel1 = $request->file('kartupel1');
        $nama_file4 = $kartupel1->getClientOriginalName();
        $tujuan_upload4 = 'kartupel_anggota1';
        $kartupel1->move($tujuan_upload4,$kartupel1->getClientOriginalName());

        $twibbon1 = $request->file('twibbon1');
        $nama_file5 = $twibbon1->getClientOriginalName();
        $tujuan_upload5 = 'twibbon_anggota1';
        $twibbon1->move($tujuan_upload5,$twibbon1->getClientOriginalName());

        $validatedDataTiga['user_id']=$user->id;
        $validatedDataTiga['foto1']=$nama_file3;
        $validatedDataTiga['kartupel1']=$nama_file4;
        $validatedDataTiga['twibbon1']=$nama_file5;


        ModelsMember::create($validatedDataTiga);
        
        $validatedDataEmpat=$request->validate([
            "namaanggota2"=>'',
            "nisn2"=>'',
            "tempatlahir2"=>'',
            "tanggallahir2"=>'',
            "foto2"=>'mimes:jpeg,png,jpg|max:2048',
            "kartupel2"=>'mimes:jpeg,png,jpg|max:2048',
            "twibbon2"=>'mimes:jpeg,png,jpg|max:2048'
        ]);

        Abstrak::create([
            'user_id'=>$user->id,
            'is_locked'=>false
        ]);
       //Ini harusnya gk wajib, aku bingung menambahkan logika if disini
        

        if ($validatedDataEmpat["namaanggota2"]=='') {
            Member2::create($validatedDataEmpat);
            return redirect('/login')->with('success', 'Regismu berhasil, akunmu sudah aktif');
        } else {
            
            $foto2 = $request->file('foto2');
            $nama_file6 = $foto2->getClientOriginalName();
            $tujuan_upload6 = 'foto_anggota2';
            $foto2->move($tujuan_upload6,$foto2->getClientOriginalName());
    
            $kartupel2 = $request->file('kartupel2');
            $nama_file7 = $kartupel2->getClientOriginalName();
            $tujuan_upload7 = 'kartupel_anggota2';
            $kartupel2->move($tujuan_upload7,$kartupel2->getClientOriginalName());
    
            $twibbon2 = $request->file('twibbon2');
            $nama_file8 = $twibbon2->getClientOriginalName();
            $tujuan_upload8 = 'twibbon_anggota2';
            $twibbon2->move($tujuan_upload8,$twibbon2->getClientOriginalName());
    
            $validatedDataEmpat['user_id']=$user->id;
            $validatedDataEmpat['foto2']=$nama_file6;
            $validatedDataEmpat['kartupel2']=$nama_file7;
            $validatedDataEmpat['twibbon2']=$nama_file8;
    
            Member2::create($validatedDataEmpat);
            return redirect('/login')->with('success', 'Regismu berhasil, akunmu sudah aktif');
        }
        

    }
}


