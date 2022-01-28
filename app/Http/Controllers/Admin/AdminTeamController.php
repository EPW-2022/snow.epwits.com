<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\User;
use App\Models\Leader;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminTeamController extends Controller
{
    public function index()
    {
        return view('admin.team.index', [
            'title'         => 'Akun Tim Peserta',
            'users'         => User::where('roles', 'Participant')->get()
        ]);
    }

    public function show(Leader $team)
    {
        return view('admin.team.show', [
            'title'         => $team->user_id,
            'team'          => $team,
        ]);
    }

    public function verifying()
    {
        
        return view('admin.team.verifying', [
            'title'         => 'Perlu Verifikasi',
            'leaders'         => Leader::where('is_verified', false)->latest()->get()
        ]);
    }

    public function leader()
    {
        return view('admin.team.leader', [
            'title'         => 'Daftar Ketua Tim',
            'users'         => User::where('roles', 'Participant')->get()
        ]);
    }

    public function member()
    {
        return view('admin.team.member', [
            'title'         => 'Daftar Ketua Anggota',
            'users'         => User::where('roles', 'Participant')->get()
        ]);
    }

    public function verified(User $user)
    {
        $ygdiverif=$user->id;
        Leader::where('user_id', $ygdiverif)->update([
            'is_verified' => true
        ]);
        
        
        return redirect('admin/tim')->with('message', 'Verified');
    }

    public function verifiedbayar(User $user)
    {
        $ygdiverif=$user->id;
        User::where('id', $ygdiverif)->update([
            'step' => 3
        ]);
        
        
        return redirect('admin/tim')->with('message', 'Verified');
    }

    public function passFinal(User $user)
    {
        $ygdiverif=$user->id;
        User::where('id', $ygdiverif)->update([
            'step' => 5
        ]);
        
        
        return redirect('admin/tim')->with('message', 'Verified');
    }

    public function resetpass(User $user)
    {
        $data['password'] = Hash::make($user->username);

        $user->update($data);
        return redirect('admin/tim')->with('message', 'Password Reset');
    }

    public function deletingData(User $user)
    {
        $team = Leader::firstWhere('user_id', $user->id);
        // $files = File::firstWhere('user_id', $user->id);

        // $photos = explode(';', $files->person_photo);
        // foreach ($photos as $photo) {
        //     rename(public_path('files/photos/' . $photo), public_path('trash/photos/' . $photo));
        // }
        // $scans = explode(';', $files->person_scan);
        // foreach ($scans as $scan) {
        //     rename(public_path('files/scan/' . $scan), public_path('trash/scan/' . $scan));
        // }
        // $payment = $files->payment_slip;
        // rename(public_path('files/payment/' . $payment), public_path('trash/payment/' . $payment));

        $user->delete();
        $team->delete();

        return redirect('admin/tim')->with('message', 'Delete Success');
    }
}
