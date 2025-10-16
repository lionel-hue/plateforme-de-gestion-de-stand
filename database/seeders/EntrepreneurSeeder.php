<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Entrepreneur;

class EntrepreneurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Entrepreneur::create([
            'nom_entreprise' => 'Que du Kiff Event',
            'email' => 'que-du-kiff-event@gmail.com',
            'password' => 'password',
            'role' => 'entrepreneur',
            'status' => 'approuve',
            'raison_rejet' => null,
            'token' => null,
            'remember_token' => null,
            'updated_at' => now(),
            'created_at' => now(),
        ]);
    }
}
