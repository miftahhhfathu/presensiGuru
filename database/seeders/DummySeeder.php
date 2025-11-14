<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummySeeder extends Seeder
{
    public function run()
    {
        // Guru
        DB::table('guru')->insert([
            ['nama_guru' => 'Asep', 'nip' => '111', 'created_at' => now(), 'updated_at' => now()],
            ['nama_guru' => 'Jajang', 'nip' => '222', 'created_at' => now(), 'updated_at' => now()],
            ['nama_guru' => 'Ujang', 'nip' => '333', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Mapel
        DB::table('mapel')->insert([
            ['nama_mapel' => 'Matematika', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'IPA', 'created_at' => now(), 'updated_at' => now()],
            ['nama_mapel' => 'Bahasa Indonesia', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Kelas
        DB::table('kelas')->insert([
            ['nama_kelas' => '7A', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => '8B', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kelas' => '9C', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Jadwal
        DB::table('jadwal')->insert([
            ['hari' => 'Senin', 'guru_id' => 1, 'mapel_id' => 1, 'kelas_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['hari' => 'Senin', 'guru_id' => 2, 'mapel_id' => 2, 'kelas_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['hari' => 'Senin', 'guru_id' => 3, 'mapel_id' => 3, 'kelas_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
