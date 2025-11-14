<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Personagem;

class PersonagemSeeder extends Seeder
{
    public function run()
    {
        Personagem::create([
            'campanha_id' => 1,
            'nome'        => 'Frodo Baggins',
            'classe'      => 'Ladino',
            'raca'        => 'Hobbit',
            'descricao'   => 'Portador do Um Anel, pequeno mas corajoso aventureiro.',
        ]);
        Personagem::create([
            'campanha_id' => 1,
            'nome'        => 'Aragorn',
            'classe'      => 'Ranger/Guerreiro',
            'raca'        => 'Humano',
            'descricao'   => 'Herdeiro de Isildur, especialista em sobrevivência e combate.',
        ]);
        Personagem::create([
            'campanha_id' => 1,
            'nome'        => 'Gimli',
            'classe'      => 'Guerreiro',
            'raca'        => 'Anão',
            'descricao'   => 'Guerreiro feroz, mestre em combate com machados.',
        ]);
        Personagem::create([
            'campanha_id' => 1,
            'nome'        => 'Gandalf',
            'classe'      => 'Mago',
            'raca'        => 'Maiar',
            'descricao'   => 'Feiticeiro de grande poder, conselheiro e mentor do grupo.',
        ]);

        Personagem::create([
            'campanha_id' => 2,
            'nome'        => 'Jon Snow',
            'classe'      => 'Guerreiro',
            'raca'        => 'Humano',
            'descricao'   => 'Lutador habilidoso, líder da Patrulha da Noite.',
        ]);
        Personagem::create([
            'campanha_id' => 2,
            'nome'        => 'Daenerys Targaryen',
            'classe'      => 'Feiticeira',
            'raca'        => 'Humana',
            'descricao'   => 'Mãe dos Dragões, comandante com poder sobre fogo e criaturas mágicas.',
        ]);
        Personagem::create([
            'campanha_id' => 2,
            'nome'        => 'Tyrion Lannister',
            'classe'      => 'Nobre/Bardo',
            'raca'        => 'Humano',
            'descricao'   => 'Diplomata astuto, dotado de inteligência e manipulação política.',
        ]);
        Personagem::create([
            'campanha_id' => 2,
            'nome'        => 'Brienne de Tarth',
            'classe'      => 'Guerreira',
            'raca'        => 'Humana',
            'descricao'   => 'Cavaleira leal e forte, defensora dos inocentes.',
        ]);

        Personagem::create([
            'campanha_id' => 3,
            'nome'        => 'Minsc',
            'classe'      => 'Ranger',
            'raca'        => 'Humano',
            'descricao'   => 'Ranger excêntrico, destemido e sempre com Boo, seu hamster.',
        ]);
        Personagem::create([
            'campanha_id' => 3,
            'nome'        => 'Imoen',
            'classe'      => 'Ladina/Maga',
            'raca'        => 'Humana',
            'descricao'   => 'Arrombadora de fechaduras e usuária de magias arcanas.',
        ]);
        Personagem::create([
            'campanha_id' => 3,
            'nome'        => 'Jaheira',
            'classe'      => 'Druida',
            'raca'        => 'Meio-elfa',
            'descricao'   => 'Defensora da natureza, poderosa usuária de magias do círculo natural.',
        ]);
        Personagem::create([
            'campanha_id' => 3,
            'nome'        => 'Edwin Odesseiron',
            'classe'      => 'Mago',
            'raca'        => 'Humano',
            'descricao'   => 'Mago ambicioso e arrogante, especialista em magias vermelhas.',
        ]);
    }
}
