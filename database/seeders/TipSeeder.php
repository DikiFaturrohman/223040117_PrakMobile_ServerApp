<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tip;

class TipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tip::create([
            'title' => 'Pisahkan Baterai dari Perangkat',
            'content' => 'Jika memungkinkan, selalu lepaskan baterai dari perangkat elektronik sebelum membuangnya untuk mencegah risiko korsleting dan kebakaran.'
        ]);

        Tip::create([
            'title' => 'Gunakan Kembali Kabel yang Masih Berfungsi',
            'content' => 'Kabel USB dan charger seringkali universal. Simpan yang masih berfungsi sebagai cadangan daripada langsung membuangnya.'
        ]);
    }
}
