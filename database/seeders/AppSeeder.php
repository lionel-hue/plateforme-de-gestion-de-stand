<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Entrepreneur;
use App\Models\Stand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Désactivation des contraintes de clé étrangère pour le nettoyage
        Schema::disableForeignKeyConstraints();
        
        // Nettoyage des tables
        User::truncate();
        Entrepreneur::truncate();
        Stand::truncate();
        
        // Réactivation des contraintes
        Schema::enableForeignKeyConstraints();

        $password = 'password123';

        // 1. Création de l'Administrateur
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'System',
            'email' => 'admin@example.com',
            'password' => Hash::make($password),
            'role' => 'admin',
            'phone' => '0102030405',
        ]);

        // 2. Création d'Entrepreneurs APPROUVÉS (avec Stands)
        $entrepreneursApprouves = [
            ['nom' => 'Saveurs du Bénin', 'email' => 'saveurs@example.com'],
            ['nom' => 'Artisanat Local', 'email' => 'artisanat@example.com'],
        ];

        foreach ($entrepreneursApprouves as $data) {
            $e = Entrepreneur::create([
                'nom_entreprise' => $data['nom'],
                'email' => $data['email'],
                'password' => Hash::make($password),
                'role' => 'entrepreneur',
                'status' => 'approuve',
            ]);

            // Création d'un stand pour chaque entrepreneur approuvé
            Stand::create([
                'slug' => Str::slug($data['nom']),
                'nom_stand' => 'Stand ' . $data['nom'],
                'description' => 'Découvrez les meilleurs produits de ' . $data['nom'],
                'type_stand' => 'Gastronomie',
                'localisation' => 'Zone A - ' . rand(1, 10),
                'prix' => '50000',
                'status' => 'reserve',
                'entrepreneur_id' => $e->id,
            ]);
        }

        // 3. Création d'Entrepreneurs EN ATTENTE (pour que l'admin voit des demandes)
        $entrepreneursEnAttente = [
            ['nom' => 'Boulangerie Moderne', 'email' => 'boulangerie@example.com'],
            ['nom' => 'Tissage Traditionnel', 'email' => 'tissage@example.com'],
            ['nom' => 'Jus de Fruits Bio', 'email' => 'jus@example.com'],
        ];

        foreach ($entrepreneursEnAttente as $data) {
            Entrepreneur::create([
                'nom_entreprise' => $data['nom'],
                'email' => $data['email'],
                'password' => Hash::make($password),
                'role' => 'entrepreneur_en_attente',
                'status' => 'en_attente',
            ]);
        }

        // 4. Création d'un Visiteur
        User::create([
            'first_name' => 'Jean',
            'last_name' => 'Visiteur',
            'email' => 'visiteur@example.com',
            'password' => Hash::make($password),
            'role' => 'visiteur',
            'phone' => '0607080910',
        ]);

        // Affichage des informations dans le terminal
        $this->command->info('---------------------------------------------------------');
        $this->command->info('   APPLICATION SEEDING COMPLÉTÉ');
        $this->command->info('   (Données pour Admin, Entrepreneurs et Stands créées)');
        $this->command->info('---------------------------------------------------------');
        
        $headers = ['Type de Compte', 'Email', 'Mot de passe', 'Détails'];
        $tableData = [
            ['Administrateur', 'admin@example.com', $password, 'Peut voir 3 demandes'],
            ['Entrepreneur (Approuvé)', 'saveurs@example.com', $password, 'A déjà un Stand'],
            ['Entrepreneur (En attente)', 'boulangerie@example.com', $password, 'Attend approbation'],
            ['Visiteur', 'visiteur@example.com', $password, 'Client standard'],
        ];

        $this->command->table($headers, $tableData);
        $this->command->info('---------------------------------------------------------');
    }
}
