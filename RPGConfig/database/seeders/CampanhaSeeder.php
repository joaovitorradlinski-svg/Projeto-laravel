<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Campanha;

class CampanhaSeeder extends Seeder
{
    public function run()
    {
        Campanha::create([
            'user_id'     => 1,
            'titulo'      => 'A Jornada do Anel',
            'descricao'   => 'Campanha épica baseada em Senhor dos Anéis. Passagem pela Terra Média enfrentando Sauron.',
            'data_inicio' => '2025-01-25',
            'data_fim'    => '2025-06-12'
        ]);

        Campanha::create([
            'user_id'     => 1,
            'titulo'      => 'As Guerras dos Sete Reinos',
            'descricao'   => 'Batalha política e militar em Westeros. Baseada no universo de Game of Thrones.',
            'data_inicio' => '2025-03-10',
            'data_fim'    => null
        ]);

        Campanha::create([
            'user_id'     => 1,
            'titulo'      => 'Mistérios de Baldur\'s Gate',
            'descricao'   => 'Aventura clássica de fantasia, investigações e monstros no cenário de Baldur\'s Gate.',
            'data_inicio' => '2025-04-15',
            'data_fim'    => null
        ]);
    }
}
