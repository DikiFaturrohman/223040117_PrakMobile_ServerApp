<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EWaste;

class EWasteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DATA LAMA
        EWaste::create([
            'name' => 'Smartphone Bekas', 
            'category' => 'Elektronik Kecil', 
            'description' => 'Smartphone yang sudah tidak terpakai dengan atau tanpa baterai.', 
            'imageUrl' => 'https://images.unsplash.com/photo-1610792516307-ea5acd9c3b00?q=80&w=2070',
            'disposalMethod' => 'Bawa ke titik daur ulang elektronik (e-waste drop box).'
        ]);
        
        EWaste::create([
            'name' => 'Baterai AA/AAA Bekas', 
            'category' => 'Baterai', 
            'description' => 'Baterai bekas segala jenis (AA, AAA, Lithium).', 
            'imageUrl' => 'https://images.unsplash.com/photo-1627993434919-39486a405906?q=80&w=2070',
            'disposalMethod' => 'Kumpulkan di kotak khusus baterai bekas, jangan dicampur sampah biasa.'
        ]);

        // ================================================================
        // TAMBAHKAN DATA BARU DI SINI
        // ================================================================

        EWaste::create([
            'name' => 'Laptop Rusak', 
            'category' => 'Elektronik Besar', 
            'description' => 'Laptop atau notebook yang sudah mati total atau layarnya pecah.', 
            'imageUrl' => 'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?q=80&w=1770',
            'disposalMethod' => 'Serahkan ke pusat servis atau tempat daur ulang resmi.'
        ]);

        EWaste::create([
            'name' => 'Kabel & Charger', 
            'category' => 'Aksesoris', 
            'description' => 'Kabel USB, charger handphone, atau kabel power lainnya yang sudah tidak berfungsi.', 
            'imageUrl' => 'https://images.unsplash.com/photo-1585357283836-7bf0343c6b24?q=80&w=1770',
            'disposalMethod' => 'Dapat didaur ulang di drop box e-waste khusus kabel.'
        ]);

        EWaste::create([
            'name' => 'Lampu Bohlam LED', 
            'category' => 'Lampu', 
            'description' => 'Lampu bohlam tipe LED yang sudah putus atau tidak menyala.', 
            'imageUrl' => 'https://images.unsplash.com/photo-1595042385832-75791cffc3d3?q=80&w=1770',
            'disposalMethod' => 'Beberapa toko elektronik besar menerima bohlam bekas untuk didaur ulang.'
        ]);
        
        EWaste::create([
            'name' => 'Televisi Tabung (CRT)', 
            'category' => 'Elektronik Besar', 
            'description' => 'TV model lama yang menggunakan tabung CRT. Mengandung bahan berbahaya.', 
            'imageUrl' => 'https://images.unsplash.com/photo-1593359677879-a4bb92f829d1?q=80&w=1770',
            'disposalMethod' => 'Harus ditangani oleh jasa daur ulang profesional. Jangan dibongkar sendiri.'
        ]);
    }
}