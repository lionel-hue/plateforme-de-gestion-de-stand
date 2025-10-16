<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stand;

class StandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stand::create([
            'slug' => 'Top Rated',
            'nom_stand' => 'Que du Kiff Event',
            'description' => 'Fidjrossè - La référence en grillades et dibiterie à Cotonou',
            'type_stand' => 'Grillades, Dibiterie, Alloco, Brochettes',
            'localisation' => 'Fidjrossè, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1559847844-5315695dadae?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]);

        Stand::create([
            'slug' => 'Ambiance-Live',
            'nom_stand' => 'Dibiterie du Chevalier',
            'description' => 'Gbedokpo - Le meilleur barbecue dans une ambiance locale authentique',
            'type_stand' => 'Barbecue, Soirée, Ambiance locale',
            'localisation' => 'Gbedokpo, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1603360946369-dc9bb6258143?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]);

        Stand::create([
            'slug' => 'Tradition',
            'nom_stand' => 'Chez Maman Bénin',
            'description' => 'Rue 201A - Plats traditionnels et alloco comme à la maison',
            'type_stand' => 'Tradition, Alloco, Pâte',
            'localisation' => 'Maro Militaire, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]);

        Stand::create([
            'slug' => 'Spécialité',
            'nom_stand' => 'Chez Idrisse Dibiterie',
            'description' => 'En face du Chevalier - Réputée pour son dibi authentique et savoureux',
            'type_stand' => 'Dibi, Brochettes, Tradition',
            'localisation' => 'Gbedokpo, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1555939594-58d7cb561ad1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]);

        Stand::create([
            'slug' => 'Regional',
            'nom_stand' => 'Chez Amy',
            'description' => 'Ganhi - Une expérience culinaire traditionnelle béninoise authentique',
            'type_stand' => 'Tradition, Plats locaux, Ambiance',
            'localisation' => 'Ganhi, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]);

        Stand::create([
            'slug' => 'Moderne',
            'nom_stand' => 'Berlin Restaurant',
            'description' => 'Rue 840 - Une interprétation contemporaine de la cuisine béninoise',
            'type_stand' => 'Contemporain, Fusion, Créatif',
            'localisation' => 'Rue 840, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]);

        Stand::create([
            'slug' => 'Populaire',
            'nom_stand' => 'Maquis Super Pili-Pili',
            'description' => "Boulevard St-Michel - L'un des maquis les plus populaires de Cotonou",
            'type_stand' => 'Plats locaux, Ambiance',
            'localisation' => 'Boulevard St-Michel, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]);

        Stand::create([
            'slug' => 'Élégant',
            'nom_stand' => 'Maquis La Résidence',
            'description' => "Près du siège Moov - Une cuisine béninoise raffinée dans un cadre élégant",
            'type_stand' => 'Plats locaux, Ambiance',
            'localisation' => 'Près du siège Moov, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]);

        Stand::create([
            'slug' => 'Authentique',
            'nom_stand' => 'Le Maquis Chez Tranquille',
            'description' => "Une cuisine béninoise typique dans une ambiance chaleureuse et conviviale",
            'type_stand' => 'Typique, Convivial, Tradition',
            'localisation' => 'Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]);

        Stand::create([
            'slug' => 'Local',
            'nom_stand' => 'Chez JB',
            'description' => "Une cuisine béninoise typique dans une ambiance chaleureuse et conviviale",
            'type_stand' => 'Local, Décontracté, Savoureux',
            'localisation' => 'Carrefour St-Michel/Steinmetz, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1559847844-5315695dadae?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]);

        Stand::create([
            'slug' => 'Ressource',
            'nom_stand' => 'Le Vezuvio',
            'description' => "Cadjèhoun - Une cuisine régionale béninoise préparée avec soin",
            'type_stand' => 'Régional, Soigné, Qualité',
            'localisation' => 'Cadjèhoun, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]);

        Stand::create([
            'slug' => 'Fruits de mer',
            'nom_stand' => 'Le Maquis du Port',
            'description' => "Ganhi - Spécialités de fruits de mer et grillades dans une ambiance portuaire",
            'type_stand' => 'Fruits de mer, Grillades, Poisson',
            'localisation' => 'Ganhi, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1432139555190-58524dae6a55?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]);

        Stand::create([
            'slug' => 'Poisson',
            'nom_stand' => 'La Cabane du Pêcheur',
            'description' => "Fidjrossè - Spécialités de poisson frais dans une ambiance maritime",
            'type_stand' => 'Poisson, Frais, Maritime',
            'localisation' => 'Fidjrossè, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]);

        Stand::create([
            'slug' => 'Varié',
            'nom_stand' => 'Le Lieu Unique',
            'description' => "Fidjrossè - Une cuisine régionale variée dans un cadre unique",
            'type_stand' => 'Varié, Régional, Unique',
            'localisation' => 'Fidjrossè, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]);

        Stand::create([
            'slug' => 'Fusion',
            'nom_stand' => 'Le Livingstone',
            'description' => "Haie-Vive - Cuisine fusion et internationale dans un cadre élégant",
            'type_stand' => 'Varié, International, Fusion',
            'localisation' => 'Haie-Vive, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]);

        Stand::create([
            'slug' => 'Buffet',
            'nom_stand' => 'Le Kidou Buffet',
            'description' => "Haie Vive - Buffet africain et international à volonté",
            'type_stand' => 'Buffet, Africain, International',
            'localisation' => 'Haie Vive, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]); 

        Stand::create([
            'slug' => 'Bar-Restaurant',
            'nom_stand' => 'Madre Mia All Aperto',
            'description' => "Haie Vive - Bar-restaurant convivial avec grillades et spécialités italiennes",
            'type_stand' => 'Grillades, Italien, Bar',
            'localisation' => 'Haie Vive, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]); 

        Stand::create([
            'slug' => 'Plage',
            'nom_stand' => 'Pirates Club Bénin',
            'description' => "Abomey-Calavi - Restaurant de plage avec grillades et ambiance festive",
            'type_stand' => 'Plage, Soirée, Grillades',
            'localisation' => 'Abomey-Calavi, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]); 

        Stand::create([
            'slug' => 'Service Rapide',
            'nom_stand' => 'Restaurant Karim 24',
            'description' => "Route de Lomé - Service rapide et spécialités régionales",
            'type_stand' => 'Service Rapide, Local, Traditionnel',
            'localisation' => 'Route de Lomé, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]); 

        Stand::create([
            'slug' => 'Biergarten',
            'nom_stand' => 'Neuer Biergarten',
            'description' => "Cuisine locale dans une ambiance de jardin à bière allemand",
            'type_stand' => 'Bière, Local, Grillades',
            'localisation' => 'Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1600891964599-f61ba0e24092?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]); 

        Stand::create([
            'slug' => 'Mer',
            'nom_stand' => 'La Plage by Code Bar',
            'description' => "Fidjrossè - Cuisine régionale avec grillades en bord de mer",
            'type_stand' => 'Plage, Poisson, Grillades',
            'localisation' => 'Fidjrossè, Cotonou',
            'prix' => 100,
            'image' => "https://images.unsplash.com/photo-1519046904884-53103b34b206?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
            'status' => 'disponible',
            'entrepreneur_id' => 1,
        ]); 
    }
}
