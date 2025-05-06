<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $jumlahMasyarakat = User::where('role', 'masyarakat')->count();
        $total = Pengajuan::count();
        $pending = Pengajuan::where('status', 'pending')->count();
        $proses = Pengajuan::where('status', 'proses')->count();
        $selesai = Pengajuan::where('status', 'selesai')->count();

        
        return view('dashboard', compact('user', 'jumlahMasyarakat', 'total', 'pending', 'proses', 'selesai'));
    }
}
