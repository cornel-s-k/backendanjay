<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // Wajib di-import untuk Hash::make()

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat user admin@elsa.id
        User::create([
            'name' => 'Elsa Admin',
            'email' => 'admin@elsa.id',
            // Wajib menggunakan Hash::make() agar password tersimpan terenkripsi
            'password' => Hash::make('password'), 
            'is_admin' => true,
            // Tambahkan field lain jika ada (misal: 'is_admin' => true)
        ]);
        
    }
}