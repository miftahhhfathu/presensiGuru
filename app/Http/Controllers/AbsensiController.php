<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class AbsensiController extends Controller
{
    public function index(Request $request)
    {
        $hari = $request->hari ?? 'Senin';

        $jadwal = Jadwal::with(['guru', 'mapel', 'kelas'])
                    ->where('hari', $hari)
                    ->get();

        return view('absensi.index', compact('jadwal', 'hari'));
    }
}
