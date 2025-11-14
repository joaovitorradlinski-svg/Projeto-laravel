<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Local;

class LocalSeeder extends Seeder
{
    public function run()
    {

        Local::create([
            'campanha_id' => 1,
            'nome'        => 'Mordor',
            'descricao'   => 'Terras de trevas e lava dominadas por Sauron.',
        ]);
        Local::create([
            'campanha_id' => 1,
            'nome'        => 'Rivendell',
            'descricao'   => 'Refúgio dos elfos, lugar de paz e conhecimento antigo.',
        ]);
        Local::create([
            'campanha_id' => 1,
            'nome'        => 'Minas Tirith',
            'descricao'   => 'A cidade branca, fortaleza dos homens de Gondor.',
        ]);


        Local::create([
            'campanha_id' => 2,
            'nome'        => 'Winterfell',
            'descricao'   => 'Fortaleza ancestral da Casa Stark, centro do norte de Westeros.',
        ]);
        Local::create([
            'campanha_id' => 2,
            'nome'        => 'Porto Real',
            'descricao'   => 'Capital dos Sete Reinos, cenário das disputas pelo Trono de Ferro.',
        ]);
        Local::create([
            'campanha_id' => 2,
            'nome'        => 'Muralha',
            'descricao'   => 'Imensa construção de gelo protegendo o reino dos horrores do norte.',
        ]);

        Local::create([
            'campanha_id' => 3,
            'nome'        => 'Taverna Elfsong',
            'descricao'   => 'Famosa taverna de Baldur\'s Gate, cheia de rumores e aventuras.',
        ]);
        Local::create([
            'campanha_id' => 3,
            'nome'        => 'Bazar da Ponte',
            'descricao'   => 'Mercado movimentado, centro de comércio e encontros urbanos.',
        ]);
        Local::create([
            'campanha_id' => 3,
            'nome'        => 'Fortaleza dos Flaming Fist',
            'descricao'   => 'Quartel do grupo de mercenários de Baldur\'s Gate.',
        ]);
    }
}
