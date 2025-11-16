<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Personagem;
use App\Models\Campanha;

class PersonagemSeeder extends Seeder
{
    public function run()
    {
        $lookup = function ($titulo) {
            $camp = Campanha::where('titulo', $titulo)->first();
            return $camp ? $camp->id : 1;
        };

        $data = [

            'A Jornada do Anel' => [
                ['nome' => 'Frodo Baggins','classe' => 'Portador','raca' => 'Hobbit','descricao' => 'Portador do Um Anel.'],
                ['nome' => 'Aragorn','classe' => 'Ranger','raca' => 'Humano','descricao' => 'Herdeiro de Isildur.'],
                ['nome' => 'Gandalf','classe' => 'Mago','raca' => 'Maiar','descricao' => 'Feiticeiro de grande poder.'],
                ['nome' => 'Legolas','classe' => 'Arqueiro','raca' => 'Elfo','descricao' => 'Arqueiro élfico habilidoso.'],
                ['nome' => 'Gimli','classe' => 'Guerreiro','raca' => 'Anão','descricao' => 'Guerreiro mestre em machados.'],
                ['nome' => 'Samwise Gamgee','classe' => 'Companheiro','raca' => 'Hobbit','descricao' => 'Leal amigo de Frodo.'],
                ['nome' => 'Elrond','classe' => 'Senhor Élfico','raca' => 'Elfo','descricao' => 'Líder dos elfos de Rivendell.'],
                ['nome' => 'Gollum','classe' => 'Sobrevivente','raca' => 'Hobbit','descricao' => 'Obcecado pelo Anel.'],
                ['nome' => 'Arwen','classe' => 'Curandeira','raca' => 'Elfa','descricao' => 'Nobre élfica de grande importância.'],
                ['nome' => 'Théoden','classe' => 'Rei','raca' => 'Humano','descricao' => 'Rei de Rohan.'],
            ],

            'As Guerras dos Sete Reinos' => [
                ['nome' => 'Jon Snow','classe' => 'Guerreiro','raca' => 'Humano','descricao' => 'Líder de grande honra.'],
                ['nome' => 'Daenerys Targaryen','classe' => 'Rainha','raca' => 'Humana','descricao' => 'Comandante determinada.'],
                ['nome' => 'Tyrion Lannister','classe' => 'Diplomata','raca' => 'Humano','descricao' => 'Estrategista astuto.'],
                ['nome' => 'Brienne of Tarth','classe' => 'Guerreira','raca' => 'Humana','descricao' => 'Cavaleira leal.'],
                ['nome' => 'Arya Stark','classe' => 'Assassina','raca' => 'Humana','descricao' => 'Ágil e mortal.'],
                ['nome' => 'Cersei Lannister','classe' => 'Regente','raca' => 'Humana','descricao' => 'Figura implacável.'],
                ['nome' => 'Sansa Stark','classe' => 'Nobre','raca' => 'Humana','descricao' => 'Cresce em astúcia.'],
                ['nome' => 'Eddard Stark','classe' => 'Guerreiro','raca' => 'Humano','descricao' => 'Senhor de Winterfell.'],
                ['nome' => 'Jaime Lannister','classe' => 'Cavaleiro','raca' => 'Humano','descricao' => 'Elite guerreira.'],
                ['nome' => 'Ramsay Bolton','classe' => 'Antagonista','raca' => 'Humano','descricao' => 'Cruel e perigoso.'],
            ],

            'Mistérios de Baldur\'s Gate' => [
                ['nome' => 'Minsc','classe' => 'Ranger','raca' => 'Humano','descricao' => 'Guerreiro corajoso.'],
                ['nome' => 'Imoen','classe' => 'Ladina','raca' => 'Humana','descricao' => 'Hábil em furtividade.'],
                ['nome' => 'Jaheira','classe' => 'Druida','raca' => 'Meio-elfa','descricao' => 'Defensora da natureza.'],
                ['nome' => 'Edwin Odesseiron','classe' => 'Mago','raca' => 'Humano','descricao' => 'Ambicioso e poderoso.'],
                ['nome' => 'Viconia DeVir','classe' => 'Clériga','raca' => 'Drow','descricao' => 'Passado sombrio.'],
                ['nome' => 'Khalid','classe' => 'Guerreiro','raca' => 'Humano','descricao' => 'Parceiro leal.'],
                ['nome' => 'Bran','classe' => 'Aventureiro','raca' => 'Humano','descricao' => 'Companheiro versátil.'],
                ['nome' => 'Yoshimo','classe' => 'Assassino','raca' => 'Humano','descricao' => 'Especialista em furtividade.'],
                ['nome' => 'Yeslick','classe' => 'Guerreiro','raca' => 'Anão','descricao' => 'Defensor experiente.'],
                ['nome' => 'Nash','classe' => 'Suporte','raca' => 'Humano','descricao' => 'Figura secundária.'],
            ],

            'Círculo do Dragão' => [
                ['nome'=>'Alistair','classe'=>'Guerreiro','raca'=>'Humano','descricao'=>'Cavaleiro leal.'],
                ['nome'=>'Morrigan','classe'=>'Feiticeira','raca'=>'Humana','descricao'=>'Maga poderosa.'],
                ['nome'=>'Fenris','classe'=>'Lutador','raca'=>'Humano','descricao'=>'Guerreiro marcado.'],
                ['nome'=>'Isabela','classe'=>'Pícaro','raca'=>'Humana','descricao'=>'Pirata carismática.'],
                ['nome'=>'Cassandra','classe'=>'Guerreira','raca'=>'Humana','descricao'=>'Líder devota.'],
                ['nome'=>'Varric','classe'=>'Bardo','raca'=>'Humano','descricao'=>'Estrategista contador de histórias.'],
                ['nome'=>'Solas','classe'=>'Mago','raca'=>'Elfo','descricao'=>'Conhecedor do véu.'],
                ['nome'=>'Dorian','classe'=>'Feiticeiro','raca'=>'Humano','descricao'=>'Elegante e poderoso.'],
                ['nome'=>'Bianca','classe'=>'Suporte','raca'=>'Humana','descricao'=>'Personagem marcante.'],
                ['nome'=>'Harper','classe'=>'Aventureiro','raca'=>'Humano','descricao'=>'Viajante experiente.'],
            ],

            'Caçada do Bruxo' => [
                ['nome'=>'Geralt of Rivia','classe'=>'Bruxo','raca'=>'Humano','descricao'=>'Caçador de monstros.'],
                ['nome'=>'Yennefer','classe'=>'Feiticeira','raca'=>'Humana','descricao'=>'Maga poderosa.'],
                ['nome'=>'Ciri','classe'=>'Escolhida','raca'=>'Humana','descricao'=>'Poderes únicos.'],
                ['nome'=>'Triss Merigold','classe'=>'Feiticeira','raca'=>'Humana','descricao'=>'Especialista em cura.'],
                ['nome'=>'Dandelion','classe'=>'Bardo','raca'=>'Humano','descricao'=>'Artista famoso.'],
                ['nome'=>'Eskel','classe'=>'Bruxo','raca'=>'Humano','descricao'=>'Veterano confiável.'],
                ['nome'=>'Vesemir','classe'=>'Mentor','raca'=>'Humano','descricao'=>'Professor dos bruxos.'],
                ['nome'=>'Zoltan Chivay','classe'=>'Guerreiro','raca'=>'Humano','descricao'=>'Bravura notável.'],
                ['nome'=>'Eredin','classe'=>'Antagonista','raca'=>'Outro','descricao'=>'Líder inimigo.'],
                ['nome'=>'Avallac\'h','classe'=>'Mago','raca'=>'Outro','descricao'=>'Figura enigmática.'],
            ],

            'Conquista de Tamriel' => [
                ['nome'=>'Dragonborn','classe'=>'Protagonista','raca'=>'Nórdico','descricao'=>'Herói destinado.'],
                ['nome'=>'Alduin','classe'=>'Dragão','raca'=>'Dragão','descricao'=>'Ameaça apocalíptica.'],
                ['nome'=>'Ulfric Stormcloak','classe'=>'Líder','raca'=>'Humano','descricao'=>'Chefe rebelde.'],
                ['nome'=>'Lydia','classe'=>'Companheira','raca'=>'Humana','descricao'=>'Guarda pessoal.'],
                ['nome'=>'Delphine','classe'=>'Ajudante','raca'=>'Humana','descricao'=>'Caçadora de dragões.'],
                ['nome'=>'Esbern','classe'=>'Erudito','raca'=>'Humano','descricao'=>'Historiador.'],
                ['nome'=>'Parthurnaax','classe'=>'Dragão','raca'=>'Dragão','descricao'=>'Dragão sábio.'],
                ['nome'=>'Serana','classe'=>'Vampira','raca'=>'Humana','descricao'=>'Figura central.'],
                ['nome'=>'Maven Black-Briar','classe'=>'Nobre','raca'=>'Humana','descricao'=>'Influente em Riften.'],
                ['nome'=>'Breen','classe'=>'NPC','raca'=>'Humano','descricao'=>'Figura secundária.'],
            ],

            'Sombras de Lordran' => [
                ['nome'=>'Chosen Undead','classe'=>'Protagonista','raca'=>'Humano','descricao'=>'Herói amaldiçoado.'],
                ['nome'=>'Firekeeper','classe'=>'Guardiã','raca'=>'Humana','descricao'=>'Cuida das fogueiras.'],
                ['nome'=>'Solaire of Astora','classe'=>'Cavaleiro','raca'=>'Humano','descricao'=>'Busca sua luz.'],
                ['nome'=>'Ornstein','classe'=>'Capitão','raca'=>'Humano','descricao'=>'Chefe formidável.'],
                ['nome'=>'Gwyn','classe'=>'Deus-Rei','raca'=>'Divino','descricao'=>'Fundador do fogo.'],
                ['nome'=>'Artorias','classe'=>'Lendário','raca'=>'Humano','descricao'=>'Corrompido pela escuridão.'],
                ['nome'=>'Black Knight','classe'=>'Cavaleiro','raca'=>'Humano','descricao'=>'Soldado sombrio.'],
                ['nome'=>'Demon','classe'=>'Demônio','raca'=>'Outro','descricao'=>'Criatura infernal.'],
                ['nome'=>'NPC Guide','classe'=>'NPC','raca'=>'Humano','descricao'=>'Figura informativa.'],
                ['nome'=>'Lord Boss','classe'=>'Boss','raca'=>'Outro','descricao'=>'Chefe final.'],
            ],

            'Reinos de Azeroth' => [
                ['nome'=>'Anduin Wrynn','classe'=>'Rei','raca'=>'Humano','descricao'=>'Líder compassivo.'],
                ['nome'=>'Thrall','classe'=>'Xamã','raca'=>'Orc','descricao'=>'Líder sábio.'],
                ['nome'=>'Jaina Proudmoore','classe'=>'Maga','raca'=>'Humana','descricao'=>'Líder estratégica.'],
                ['nome'=>'Sylvanas Windrunner','classe'=>'Ranger','raca'=>'Elfa Sombria','descricao'=>'Figura trágica.'],
                ['nome'=>'Varok Saurfang','classe'=>'Guerreiro','raca'=>'Orc','descricao'=>'Veterano de guerra.'],
                ['nome'=>'Illidan Stormrage','classe'=>'Anti-herói','raca'=>'Elfo Noturno','descricao'=>'Poderoso e controverso.'],
                ['nome'=>'Arthas Menethil','classe'=>'Rei Lich','raca'=>'Humano','descricao'=>'Tirano poderoso.'],
                ['nome'=>'Gul\'dan','classe'=>'Bruxo','raca'=>'Orc','descricao'=>'Sedento por poder.'],
                ['nome'=>'Vol\'jin','classe'=>'Líder','raca'=>'Troll','descricao'=>'Carismático.'],
                ['nome'=>'Neptulon','classe'=>'Elemental','raca'=>'Outro','descricao'=>'Poder marinho.'],
            ],

            'Crônicas de Norrath' => [
                ['nome'=>'Hero of Freeport','classe'=>'Vários','raca'=>'Humano','descricao'=>'Campeão lendário.'],
                ['nome'=>'Neriak Noble','classe'=>'Nobre','raca'=>'Vário','descricao'=>'Líder político.'],
                ['nome'=>'Halas Captain','classe'=>'Militar','raca'=>'Humano','descricao'=>'Comandante severo.'],
                ['nome'=>'Thundering Herd','classe'=>'Aventureiro','raca'=>'Vários','descricao'=>'Grupo lendário.'],
                ['nome'=>'Throne Lord','classe'=>'Regente','raca'=>'Humano','descricao'=>'Figura de autoridade.'],
                ['nome'=>'EQ Hero','classe'=>'Vários','raca'=>'Vários','descricao'=>'Herói representativo.'],
                ['nome'=>'Field Warden','classe'=>'Guarda','raca'=>'Vários','descricao'=>'Protetor das rotas.'],
                ['nome'=>'Crypt Keeper','classe'=>'Guardião','raca'=>'Outro','descricao'=>'Guardião de tumbas.'],
                ['nome'=>'Temple Acolyte','classe'=>'Sagrado','raca'=>'Vários','descricao'=>'Devoto de rituais.'],
                ['nome'=>'Dungeon Chief','classe'=>'Boss','raca'=>'Outro','descricao'=>'Guardião de masmorras.'],
            ],

            'Expedição Estelar' => [
                ['nome'=>'Capitã Nova Reyes','classe'=>'Comandante','raca'=>'Humana','descricao'=>'Líder exploratória.'],
                ['nome'=>'Dr. Orion Kale','classe'=>'Cientista','raca'=>'Humano','descricao'=>'Especialista em xenobiologia.'],
                ['nome'=>'Mek-7','classe'=>'Android','raca'=>'Construct','descricao'=>'Unidade analítica.'],
                ['nome'=>'Liam Cortez','classe'=>'Piloto','raca'=>'Humano','descricao'=>'Piloto destemido.'],
                ['nome'=>'Sera','classe'=>'Engenheira','raca'=>'Humana','descricao'=>'Responsável por reparos.'],
                ['nome'=>'Commander Holt','classe'=>'Tático','raca'=>'Humano','descricao'=>'Estrategista espacial.'],
                ['nome'=>'Na\'ri','classe'=>'Xeno-Linguista','raca'=>'Alien','descricao'=>'Especialista em idiomas.'],
                ['nome'=>'Helix-9','classe'=>'Cyborg','raca'=>'Construct','descricao'=>'Aprimorado mecanicamente.'],
                ['nome'=>'Dr. Myles','classe'=>'Médico','raca'=>'Humano','descricao'=>'Especialista em primeiros socorros.'],
                ['nome'=>'Rae','classe'=>'Exploradora','raca'=>'Humana','descricao'=>'Responsável por mapeamentos.'],
            ],

        ];

        foreach ($data as $campTitulo => $personagens) {
            $campId = $lookup($campTitulo);
            foreach ($personagens as $p) {
                Personagem::create([
                    'campanha_id' => $campId,
                    'nome' => $p['nome'],
                    'classe' => $p['classe'],
                    'raca' => $p['raca'],
                    'descricao' => $p['descricao'],
                    'imagem' => null,
                ]);
            }
        }
    }
}
