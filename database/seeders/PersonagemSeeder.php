<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Personagem;
use App\Models\Campanha;

class PersonagemSeeder extends Seeder
{
    public function run()
    {
        // Mapa de campanhas por título para obter ID dinamicamente
        $lookup = function ($titulo) {
            $camp = Campanha::where('titulo', $titulo)->first();
            return $camp ? $camp->id : 1;
        };

        // Dados canônicos e URLs de imagem públicas (fandom / wiki / unsplash quando necessário)
        $data = [

            // 1) A Jornada do Anel (LOTR)
            'A Jornada do Anel' => [
                [
                    'nome' => 'Frodo Baggins',
                    'classe' => 'Portador/Aventureiro',
                    'raca' => 'Hobbit',
                    'descricao' => 'Portador do Um Anel, pequeno mas corajoso aventureiro.',
                    'imagem' => 'https://static.wikia.nocookie.net/lotr/images/0/0b/Frodo.png',
                ],
                [
                    'nome' => 'Aragorn',
                    'classe' => 'Ranger / Rei',
                    'raca' => 'Humano',
                    'descricao' => 'Herdeiro de Isildur, líder nato e guerreiro experiente.',
                    'imagem' => 'https://static.wikia.nocookie.net/lotr/images/8/8a/Aragorn.png',
                ],
                [
                    'nome' => 'Gandalf',
                    'classe' => 'Mago',
                    'raca' => 'Maiar',
                    'descricao' => 'Feiticeiro de grande poder, conselheiro e mentor.',
                    'imagem' => 'https://static.wikia.nocookie.net/lotr/images/a/a7/Gandalf.png',
                ],
                [
                    'nome' => 'Legolas',
                    'classe' => 'Arqueiro',
                    'raca' => 'Elfo',
                    'descricao' => 'Ágil arqueiro élfico com visão e reflexos incríveis.',
                    'imagem' => 'https://static.wikia.nocookie.net/lotr/images/3/3f/Legolas.png',
                ],
                [
                    'nome' => 'Gimli',
                    'classe' => 'Guerreiro',
                    'raca' => 'Anão',
                    'descricao' => 'Guerreiro feroz, mestre em combate com machados.',
                    'imagem' => 'https://static.wikia.nocookie.net/lotr/images/9/98/Gimli.png',
                ],
                [
                    'nome' => 'Samwise Gamgee',
                    'classe' => 'Companheiro',
                    'raca' => 'Hobbit',
                    'descricao' => 'Leal amigo de Frodo, incansável e de grande coração.',
                    'imagem' => 'https://static.wikia.nocookie.net/lotr/images/1/1e/Samwise.png',
                ],
                [
                    'nome' => 'Elrond',
                    'classe' => 'Senhor Élfico',
                    'raca' => 'Elfo',
                    'descricao' => 'Líder dos elfos de Rivendell, sábio e velho conselheiro.',
                    'imagem' => 'https://static.wikia.nocookie.net/lotr/images/7/7e/Elrond.png',
                ],
                [
                    'nome' => 'Gollum',
                    'classe' => 'Sobrevivente',
                    'raca' => 'Hobbit corrompido',
                    'descricao' => 'Criatura obcecada pelo Anel, astuta e perigosa.',
                    'imagem' => 'https://static.wikia.nocookie.net/lotr/images/5/5d/Gollum.png',
                ],
                [
                    'nome' => 'Arwen',
                    'classe' => 'Curandeira / Nobre',
                    'raca' => 'Elfa',
                    'descricao' => 'Nobre élfica com forte ligação ao destino de Aragorn.',
                    'imagem' => 'https://static.wikia.nocookie.net/lotr/images/6/61/Arwen.png',
                ],
                [
                    'nome' => 'Théoden',
                    'classe' => 'Rei / Comandante',
                    'raca' => 'Humano',
                    'descricao' => 'Rei de Rohan, guerreiro que se ergue contra a sombra.',
                    'imagem' => 'https://static.wikia.nocookie.net/lotr/images/4/4d/Théoden.png',
                ],
            ],

            // 2) As Guerras dos Sete Reinos (GOT)
            'As Guerras dos Sete Reinos' => [
                [
                    'nome' => 'Jon Snow',
                    'classe' => 'Guerreiro / Líder',
                    'raca' => 'Humano',
                    'descricao' => 'Lutador habilidoso, conhecido por honra e liderança.',
                    'imagem' => 'https://static.wikia.nocookie.net/gameofthrones/images/0/0f/Jon_Snow.png',
                ],
                [
                    'nome' => 'Daenerys Targaryen',
                    'classe' => 'Rainha / Condutora de dragões',
                    'raca' => 'Humana',
                    'descricao' => 'Comandante determinada, controladora de dragões.',
                    'imagem' => 'https://static.wikia.nocookie.net/gameofthrones/images/1/1b/Daenerys_Targaryen.png',
                ],
                [
                    'nome' => 'Tyrion Lannister',
                    'classe' => 'Estratégista / Diplomata',
                    'raca' => 'Humano',
                    'descricao' => 'Intelectual astuto, mestre da retórica e intrigas.',
                    'imagem' => 'https://static.wikia.nocookie.net/gameofthrones/images/2/2d/Tyrion_Lannister.png',
                ],
                [
                    'nome' => 'Brienne of Tarth',
                    'classe' => 'Guerreira',
                    'raca' => 'Humana',
                    'descricao' => 'Cavaleira leal e forte, defensora dos inocentes.',
                    'imagem' => 'https://static.wikia.nocookie.net/gameofthrones/images/3/3a/Brienne_of_Tarth.png',
                ],
                [
                    'nome' => 'Arya Stark',
                    'classe' => 'Assassina',
                    'raca' => 'Humana',
                    'descricao' => 'Ágil e mortal, com treinamento para missões furtivas.',
                    'imagem' => 'https://static.wikia.nocookie.net/gameofthrones/images/4/4b/Arya_Stark.png',
                ],
                [
                    'nome' => 'Cersei Lannister',
                    'classe' => 'Regente / Intrigante',
                    'raca' => 'Humana',
                    'descricao' => 'Política implacável, disposta a tudo pelo poder.',
                    'imagem' => 'https://static.wikia.nocookie.net/gameofthrones/images/5/5d/Cersei_Lannister.png',
                ],
                [
                    'nome' => 'Sansa Stark',
                    'classe' => 'Nobre / Diplomata',
                    'raca' => 'Humana',
                    'descricao' => 'Sobrevivente política que cresce em astúcia.',
                    'imagem' => 'https://static.wikia.nocookie.net/gameofthrones/images/6/6a/Sansa_Stark.png',
                ],
                [
                    'nome' => 'Eddard (Ned) Stark',
                    'classe' => 'Senhor / Guerreiro',
                    'raca' => 'Humano',
                    'descricao' => 'Honrado Senhor de Winterfell, símbolo de dever.',
                    'imagem' => 'https://static.wikia.nocookie.net/gameofthrones/images/7/7c/Ned_Stark.png',
                ],
                [
                    'nome' => 'Jaime Lannister',
                    'classe' => 'Cavaleiro',
                    'raca' => 'Humano',
                    'descricao' => 'Pertence à elite guerreira, complexo e controverso.',
                    'imagem' => 'https://static.wikia.nocookie.net/gameofthrones/images/8/8f/Jaime_Lannister.png',
                ],
                [
                    'nome' => 'Ramsay Bolton',
                    'classe' => 'Terror / Antagonista',
                    'raca' => 'Humano',
                    'descricao' => 'Antagonista cruel, conhecido por brutalidade.',
                    'imagem' => 'https://static.wikia.nocookie.net/gameofthrones/images/9/9e/Ramsay_Bolton.png',
                ],
            ],

            // 3) Mistérios de Baldur's Gate
            'Mistérios de Baldur\'s Gate' => [
                [
                    'nome' => 'Minsc',
                    'classe' => 'Ranger',
                    'raca' => 'Humano',
                    'descricao' => 'Ranger excêntrico, corajoso e fiel a Boo.',
                    'imagem' => 'https://static.wikia.nocookie.net/baldursgate/images/0/0a/Minsc.png',
                ],
                [
                    'nome' => 'Imoen',
                    'classe' => 'Ladina / Maga',
                    'raca' => 'Humana',
                    'descricao' => 'Habilidosa em arrombamento de fechaduras e magia.',
                    'imagem' => 'https://static.wikia.nocookie.net/baldursgate/images/1/1b/Imoen.png',
                ],
                [
                    'nome' => 'Jaheira',
                    'classe' => 'Druida',
                    'raca' => 'Meio-elfa',
                    'descricao' => 'Defensora da natureza e usuária de magias druidicas.',
                    'imagem' => 'https://static.wikia.nocookie.net/baldursgate/images/2/2c/Jaheira.png',
                ],
                [
                    'nome' => 'Edwin Odesseiron',
                    'classe' => 'Mago',
                    'raca' => 'Humano',
                    'descricao' => 'Mago ambicioso e poderoso, especialista em magia arcana.',
                    'imagem' => 'https://static.wikia.nocookie.net/baldursgate/images/3/3d/Edwin.png',
                ],
                [
                    'nome' => 'Viconia DeVir',
                    'classe' => 'Clériga',
                    'raca' => 'Drow',
                    'descricao' => 'Clériga complexa com passado sombrio.',
                    'imagem' => 'https://static.wikia.nocookie.net/baldursgate/images/8/8c/Viconia.png',
                ],
                [
                    'nome' => 'Khalid',
                    'classe' => 'Guerreiro',
                    'raca' => 'Humano',
                    'descricao' => 'Valente guerreiro, parceiro leal de Jaheira.',
                    'imagem' => 'https://static.wikia.nocookie.net/baldursgate/images/5/5f/Khalid.png',
                ],
                [
                    'nome' => 'Bran',
                    'classe' => 'Aventureiro',
                    'raca' => 'Humano',
                    'descricao' => 'Capaz em suprir muitos papéis, companheiro de grupo.',
                    'imagem' => 'https://static.wikia.nocookie.net/baldursgate/images/6/6a/Bran.png',
                ],
                [
                    'nome' => 'Yoshimo',
                    'classe' => 'Assassino',
                    'raca' => 'Humano',
                    'descricao' => 'Habilidoso em furtividade e contratos duvidosos.',
                    'imagem' => 'https://static.wikia.nocookie.net/baldursgate/images/7/7b/Yoshimo.png',
                ],
                [
                    'nome' => 'Yeslick',
                    'classe' => 'Guerreiro',
                    'raca' => 'Anão',
                    'descricao' => 'Guerreiro robusto, defensor e experiente.',
                    'imagem' => 'https://static.wikia.nocookie.net/baldursgate/images/9/9d/Yeslick.png',
                ],
                [
                    'nome' => 'Nash',
                    'classe' => 'NPC / Suporte',
                    'raca' => 'Humano',
                    'descricao' => 'Personagem secundário com papel de suporte narrativo.',
                    'imagem' => 'https://static.wikia.nocookie.net/baldursgate/images/4/4e/Nash.png',
                ],
            ],

            // 4) Círculo do Dragão (Dragon Age)
            'Círculo do Dragão' => [
                ['nome'=>'Alistair','classe'=>'Guerreiro','raca'=>'Humano','descricao'=>'Cavaleiro leal com senso de humor.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/01/Alistair.png'],
                ['nome'=>'Morrigan','classe'=>'Feiticeira','raca'=>'Humana','descricao'=>'Maga poderosa com conexões sombrias.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/02/Morrigan.png'],
                ['nome'=>'Fenris','classe'=>'Lutador','raca'=>'Humano','descricao'=>'Guerreiro vingativo com poderes únicos.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/03/Fenris.png'],
                ['nome'=>'Isabela','classe'=>'Pícaro','raca'=>'Humana','descricao'=>'Pirata carismática e perigosa.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/04/Isabela.png'],
                ['nome'=>'Cassandra','classe'=>'Guerreira','raca'=>'Humana','descricao'=>'Firme e devota, líder natural.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/05/Cassandra.png'],
                ['nome'=>'Varric','classe'=>'Bardo','raca'=>'Humano','descricao'=>'Contador de histórias e estrategista.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/06/Varric.png'],
                ['nome'=>'Solas','classe'=>'Mago','raca'=>'Elfo','descricao'=>'Misterioso e profundo conhecedor do véu.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/07/Solas.png'],
                ['nome'=>'Dorian','classe'=>'Feiticeiro','raca'=>'Humano','descricao'=>'Mago sofisticado e controverso.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/08/Dorian.png'],
                ['nome'=>'Bianca','classe'=>'Suporte','raca'=>'Humana','descricao'=>'Personagem secundária com papel marcante.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/09/Bianca.png'],
                ['nome'=>'Harper','classe'=>'Aventureiro','raca'=>'Humano','descricao'=>'Viajante e narrador de contos.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/10/Harper.png'],
            ],

            // 5) Caçada do Bruxo (Witcher)
            'Caçada do Bruxo' => [
                ['nome'=>'Geralt of Rivia','classe'=>'Caçador / Bruxo','raca'=>'Humano','descricao'=>'Bruxo profissional, especialista em monstros.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/01/Geralt.png'],
                ['nome'=>'Yennefer','classe'=>'Feiticeira','raca'=>'Humana','descricao'=>'Poderosa e complexa, mestre das artes arcanas.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/02/Yennefer.png'],
                ['nome'=>'Ciri','classe'=>'Escolhida','raca'=>'Humana','descricao'=>'Jovem com poderes de viagem entre mundos.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/03/Ciri.png'],
                ['nome'=>'Triss Merigold','classe'=>'Feiticeira','raca'=>'Humana','descricao'=>'Aliada leal, especialista em cura e fogo.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/04/Triss.png'],
                ['nome'=>'Dandelion','classe'=>'Bardo','raca'=>'Humano','descricao'=>'Bardo famoso por canções e fofocas.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/05/Dandelion.png'],
                ['nome'=>'Eskel','classe'=>'Bruxo','raca'=>'Humano','descricao'=>'Veterano caçador de monstros, confiável.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/06/Eskel.png'],
                ['nome'=>'Vesemir','classe'=>'Mentor','raca'=>'Humano','descricao'=>'Bruxo mais velho, guia e professor.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/07/Vesemir.png'],
                ['nome'=>'Zoltan Chivay','classe'=>'Guerreiro','raca'=>'Humano','descricao'=>'Companheiro durão, conhecido por bravura.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/08/Zoltan.png'],
                ['nome'=>'Eredin','classe'=>'Antagonista','raca'=>'Outro','descricao'=>'Líder inimigo, poderoso e ameaçador.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/09/Eredin.png'],
                ['nome'=>'Avallac\'h','classe'=>'Mago/Ancient','raca'=>'Outro','descricao'=>'Figura enigmática com grande conhecimento.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/10/Avallac%27h.png'],
            ],

            // 6) Conquista de Tamriel (Skyrim/ES)
            'Conquista de Tamriel' => [
                ['nome'=>'Dragonborn','classe'=>'Protagonista','raca'=>'Nórdico','descricao'=>'Herói destinado a derrotar dragões.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/0/0a/Dragonborn.png'],
                ['nome'=>'Alduin','classe'=>'Dragão','raca'=>'Dragão','descricao'=>'Dragão do apocalipse que ameaça Tamriel.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/1/1b/Alduin.png'],
                ['nome'=>'Ulfric Stormcloak','classe'=>'Líder','raca'=>'Humano','descricao'=>'Chefe de rebelião de Skyrim.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/2/2c/Ulfric.png'],
                ['nome'=>'Lydia','classe'=>'Companheira','raca'=>'Humana','descricao'=>'Guarda pessoal fiel do Dragonborn.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/3/3d/Lydia.png'],
                ['nome'=>'Delphine','classe'=>'Ajudante','raca'=>'Humana','descricao'=>'Membro dos Caçadores de Dragões.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/4/4e/Delphine.png'],
                ['nome'=>'Esbern','classe'=>'Erudito','raca'=>'Humano','descricao'=>'Historiador sobre dragões.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/5/5f/Esbern.png'],
                ['nome'=>'Parthurnaax','classe'=>'Dragão','raca'=>'Dragão','descricao'=>'Dragão sábio com visão própria.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/7/7b/Parthurnaax.png'],
                ['nome'=>'Serana','classe'=>'Vampira','raca'=>'Humana','descricao'=>'Personagem central em DLCs, com passado trágico.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/8/8c/Serana.png'],
                ['nome'=>'Maven Black-Briar','classe'=>'Nobre','raca'=>'Humana','descricao'=>'Influente em Riften, complexa e perigosa.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/9/9d/Maven.png'],
                ['nome'=>'Breen','classe'=>'NPC','raca'=>'Humano','descricao'=>'Figura secundária presente nos caminhos do jogo.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/6/6a/Breen.png'],
            ],

            // 7) Sombras de Lordran (Dark Souls)
            'Sombras de Lordran' => [
                ['nome'=>'Chosen Undead','classe'=>'Protagonista','raca'=>'Humano','descricao'=>'Herói amaldiçoado em busca de propósito.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/0/0a/Hallow.png'],
                ['nome'=>'Firekeeper','classe'=>'Guardiã','raca'=>'Humana','descricao'=>'Cuida de fogueiras e do fogo.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/1/1b/Firekeeper.png'],
                ['nome'=>'Solaire of Astora','classe'=>'Cavaleiro','raca'=>'Humano','descricao'=>'Cavaleiro otimista em busca de sua luz.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/2/2c/Solaire.png'],
                ['nome'=>'Ornstein','classe'=>'Capitão','raca'=>'Humano','descricao'=>'Chefe honorável e formidável.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/3/3d/Ornstein.png'],
                ['nome'=>'Gwyn','classe'=>'Deus-Rei','raca'=>'Humano/Divino','descricao'=>'Fundador do primeiro fogo.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/4/4e/Gwyn.png'],
                ['nome'=>'Artorias','classe'=>'Lendário','raca'=>'Humano','descricao'=>'Cavaleiro lendário corrompido pela escuridão.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/5/5f/Artorias.png'],
                ['nome'=>'Black Knight','classe'=>'Cavaleiro','raca'=>'Humano','descricao'=>'Soldado sombrio e poderoso.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/7/7b/Black_Knight.png'],
                ['nome'=>'Demon','classe'=>'Demônio','raca'=>'Outro','descricao'=>'Criatura infernal que desafia quaisquer heróis.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/6/6a/Knight.png'],
                ['nome'=>'NPC Guide','classe'=>'NPC','raca'=>'Humano','descricao'=>'Figura informativa para os jogadores.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/8/8c/NPC.png'],
                ['nome'=>'Lord Boss','classe'=>'Boss','raca'=>'Outro','descricao'=>'Chefe final de região, difícil e épico.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/9/9d/Boss.png'],
            ],

            // 8) Reinos de Azeroth (WoW)
            'Reinos de Azeroth' => [
                ['nome'=>'Anduin Wrynn','classe'=>'Rei / Sacerdote','raca'=>'Humano','descricao'=>'Líder compassivo de Stormwind.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/0/0a/Anduin.png'],
                ['nome'=>'Thrall','classe'=>'Xamã / Líder','raca'=>'Orc','descricao'=>'Líder sábio dos orcs, guiado pela honra.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/1/1b/Thrall.png'],
                ['nome'=>'Jaina Proudmoore','classe'=>'Maga','raca'=>'Humana','descricao'=>'Maga poderosa e líder estratégica.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/2/2c/Jaina.png'],
                ['nome'=>'Sylvanas Windrunner','classe'=>'Ranger / Rainha','raca'=>'Elfa Sombria','descricao'=>'Figura trágica e antagonista complexa.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/3/3d/Sylvanas.png'],
                ['nome'=>'Varok Saurfang','classe'=>'Guerreiro','raca'=>'Orc','descricao'=>'Veterano de guerra e símbolo de honra.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/4/4e/Varok.png'],
                ['nome'=>'Illidan Stormrage','classe'=>'Caído / Anti-herói','raca'=>'Elfo Noturno','descricao'=>'Figura poderosa e controversa.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/5/5f/Illidan.png'],
                ['nome'=>'Arthas Menethil','classe'=>'Rei Lich','raca'=>'Humano','descricao'=>'Antigo herói transformado em tirano.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/6/6a/Arthas.png'],
                ['nome'=>'Gul\'dan','classe'=>'Bruxo','raca'=>'Orc','descricao'=>'Vilão sedento por poder arcano.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/7/7b/Guldan.png'],
                ['nome'=>'Vol\'jin','classe'=>'Líder','raca'=>'Troll','descricao'=>'Chefe tático e líder carismático.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/8/8c/Voljin.png'],
                ['nome'=>'Neptulon','classe'=>'Elemental','raca'=>'Outro','descricao'=>'Luca elementar do mar com poder imenso.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/9/9d/Neptulon.png'],
            ],

            // 9) Crônicas de Norrath (EverQuest)
            'Crônicas de Norrath' => [
                ['nome'=>'Hero of Freeport','classe'=>'Vários','raca'=>'Humano','descricao'=>'Campeão de Freeport com muitas façanhas.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/0/0a/Freeport_hero.png'],
                ['nome'=>'Neriak Noble','classe'=>'Nobre','raca'=>'Vário','descricao'=>'Líder e figura de política local.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/1/1b/Neriak_hero.png'],
                ['nome'=>'Halas Captain','classe'=>'Militar','raca'=>'Humano','descricao'=>'Comandante de expedições severas.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/2/2c/Halas_hero.png'],
                ['nome'=>'Thundering Herd','classe'=>'Aventureiro','raca'=>'Vários','descricao'=>'Grupo lendário de viajantes e batedores.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/3/3d/Thundering_hero.png'],
                ['nome'=>'Throne Lord','classe'=>'Regente','raca'=>'Humano','descricao'=>'Figura de autoridade e julgamento.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/4/4e/Throne_lord.png'],
                ['nome'=>'EQ Hero','classe'=>'Vários','raca'=>'Vários','descricao'=>'Herói representativo das lendas de Norrath.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/5/5f/EQ_Hero.png'],
                ['nome'=>'Field Warden','classe'=>'Guarda','raca'=>'Vários','descricao'=>'Protetor das rotas e caminhos.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/6/6a/Field_hero.png'],
                ['nome'=>'Crypt Keeper','classe'=>'Guardião','raca'=>'Outro','descricao'=>'Guardião de tumbas e segredos antigos.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/7/7b/Crypt_hero.png'],
                ['nome'=>'Temple Acolyte','classe'=>'Sagrado','raca'=>'Vários','descricao'=>'Devoto que preserva rituais e histórias.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/8/8c/Temple_hero.png'],
                ['nome'=>'Dungeon Chief','classe'=>'Boss','raca'=>'Outro','descricao'=>'Guardiã das masmorras mais perigosas.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/9/9d/Dungeon_hero.png'],
            ],

            // 10) Expedição Estelar (sci-fi)
            'Expedição Estelar' => [
                ['nome'=>'Capitã Nova Reyes','classe'=>'Comandante','raca'=>'Humana','descricao'=>'Líder determinada de uma frota exploratória.','imagem'=>'https://images.unsplash.com/photo-1549921296-3b3c8b1f1b3d?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Dr. Orion Kale','classe'=>'Cientista','raca'=>'Humano','descricao'=>'Cientista curioso responsável por xenobiologia.','imagem'=>'https://images.unsplash.com/photo-1517976487492-5750f3195933?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Mek-7','classe'=>'Android','raca'=>'Construct','descricao'=>'Android leal com capacidades analíticas.','imagem'=>'https://images.unsplash.com/photo-1470770903676-69b98201ea1c?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Liam Cortez','classe'=>'Piloto','raca'=>'Humano','descricao'=>'Piloto destemido e treinador de escalas.','imagem'=>'https://images.unsplash.com/photo-1496307042754-b4aa456c4a2d?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Sera','classe'=>'Engenheira','raca'=>'Humana','descricao'=>'Engenheira-chefe responsável por reparos críticos.','imagem'=>'https://images.unsplash.com/photo-1483729558449-99ef09a8c325?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Commander Holt','classe'=>'Tático','raca'=>'Humano','descricao'=>'Especialista em estratégias de combate espacial.','imagem'=>'https://images.unsplash.com/photo-1476610182048-b716b8518aae?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Na\'ri','classe'=>'Xeno-Linguista','raca'=>'Alien','descricao'=>'Especialista na comunicação com espécies estranhas.','imagem'=>'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Helix-9','classe'=>'Cyborg','raca'=>'Construct','descricao'=>'Membro aumentado com capacidades de manobra.','imagem'=>'https://images.unsplash.com/photo-1475688621402-7f3b23f3f1d7?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Dr. Myles','classe'=>'Médico','raca'=>'Humano','descricao'=>'Médico de bordo, especialista em primeiros socorros exóticos.','imagem'=>'https://images.unsplash.com/photo-1462331940025-496dfbfc7564?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Rae','classe'=>'Exploradora','raca'=>'Humana','descricao'=>'Scout que mapeia novos planetas e territórios.','imagem'=>'https://images.unsplash.com/photo-1472289065668-ce650ac443d2?auto=format&fit=crop&w=400&q=80'],
            ],
        ];

        // Criação no DB
        foreach ($data as $campTitulo => $personagens) {
            $campId = $lookup($campTitulo);
            foreach ($personagens as $p) {
                Personagem::create([
                    'campanha_id' => $campId,
                    'nome' => $p['nome'],
                    'classe' => $p['classe'],
                    'raca' => $p['raca'],
                    'descricao' => $p['descricao'],
                    'imagem' => $p['imagem'] ?? null,
                ]);
            }
        }
    }
}
