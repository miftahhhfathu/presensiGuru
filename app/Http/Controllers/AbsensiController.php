<?php

namespace App\Http\Controllers;
use App\Models\Jadwal;
use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Kelas;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index(Request $request)
    {
        $hariDipilih = $request->hari ?? 'Senin';

        $jadwal = Jadwal::with(['guru', 'mapel', 'kelas'])
            ->where('hari', $hariDipilih)
            ->get();

        return view('absensi.index', compact('jadwal', 'hariDipilih'));
    }
}
