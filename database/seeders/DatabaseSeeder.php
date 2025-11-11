<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Ganti User::create() dengan User::firstOrCreate()
        //    Ini akan mencari pengguna dengan 'email' => 'admin@elsa.id'.
        //    Jika ditemukan, tidak akan ada operasi insert baru (tidak ada error duplikat).
        //    Jika TIDAK ditemukan, ia akan membuat record baru menggunakan data di array kedua.
        User::firstOrCreate(
            ['email' => 'admin@elsa.id'], // Kunci yang diperiksa
            [
                'name' => 'Elsa Admin',
                // Wajib menggunakan Hash::make() agar password tersimpan terenkripsi
                'password' => Hash::make('password'), 
                'is_admin' => true,
            ]
        );
        
        // Anda bisa menambahkan seed data lain di sini jika diperlukan.
    }
}