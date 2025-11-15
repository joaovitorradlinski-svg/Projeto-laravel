<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Campanha;
use Carbon\Carbon;

class CampanhaSeeder extends Seeder
{
    public function run()
    {
        $campanhas = [
            [
                'titulo' => 'A Jornada do Anel',
                'descricao' => 'Campanha épica baseada em Senhor dos Anéis. Passagem pela Terra Média enfrentando Sauron.',
                'data_inicio' => '2025-01-25',
                'data_fim' => '2025-06-12',
                'user_id' => 1,
                'slug' => 'lotr',
            ],
            [
                'titulo' => 'As Guerras dos Sete Reinos',
                'descricao' => 'Batalha política e militar em Westeros. Baseada no universo de Game of Thrones.',
                'data_inicio' => '2025-03-10',
                'data_fim' => null,
                'user_id' => 1,
                'slug' => 'got',
            ],
            [
                'titulo' => 'Mistérios de Baldur\'s Gate',
                'descricao' => 'Aventura clássica de fantasia, investigações e monstros no cenário de Baldur\'s Gate.',
                'data_inicio' => '2025-04-15',
                'data_fim' => null,
                'user_id' => 1,
                'slug' => 'baldurs-gate',
            ],
            [
                'titulo' => 'Círculo do Dragão',
                'descricao' => 'Campanha de fantasia sombria com dragões, intrigas e reinos perdidos.',
                'data_inicio' => '2025-02-01',
                'data_fim' => null,
                'user_id' => 1,
                'slug' => 'dragon-age',
            ],
            [
                'titulo' => 'Caçada do Bruxo',
                'descricao' => 'Missões de caçador de monstros, contratos e escolhas morais difíceis.',
                'data_inicio' => '2025-05-01',
                'data_fim' => null,
                'user_id' => 1,
                'slug' => 'witcher',
            ],
            [
                'titulo' => 'Conquista de Tamriel',
                'descricao' => 'Exploração e conquistas no continente de Tamriel — reinos e intrigas.',
                'data_inicio' => '2025-06-01',
                'data_fim' => null,
                'user_id' => 1,
                'slug' => 'skyrim',
            ],
            [
                'titulo' => 'Sombras de Lordran',
                'descricao' => 'Campanha sombria inspirada em mundos de almas e desafios para bravos heróis.',
                'data_inicio' => '2025-07-01',
                'data_fim' => null,
                'user_id' => 1,
                'slug' => 'dark-souls',
            ],
            [
                'titulo' => 'Reinos de Azeroth',
                'descricao' => 'Conflitos épicos e aventuras no vasto mundo de Azeroth.',
                'data_inicio' => '2025-08-01',
                'data_fim' => null,
                'user_id' => 1,
                'slug' => 'wow',
            ],
            [
                'titulo' => 'Crônicas de Norrath',
                'descricao' => 'Missões e guildas em terras de fantasia clássica e masmorras perigosas.',
                'data_inicio' => '2025-09-01',
                'data_fim' => null,
                'user_id' => 1,
                'slug' => 'everquest',
            ],
            [
                'titulo' => 'Expedição Estelar',
                'descricao' => 'Campanha sci-fi com viagens espaciais, facções e planetas misteriosos.',
                'data_inicio' => '2025-10-01',
                'data_fim' => null,
                'user_id' => 1,
                'slug' => 'sci-fi',
            ],
        ];

        foreach ($campanhas as $c) {
            Campanha::updateOrCreate(
                ['titulo' => $c['titulo']],
                [
                    'user_id' => $c['user_id'],
                    'titulo' => $c['titulo'],
                    'descricao' => $c['descricao'],
                    'data_inicio' => $c['data_inicio'],
                    'data_fim' => $c['data_fim'],
                ]
            );
        }
    }
}
