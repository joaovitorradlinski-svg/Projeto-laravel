<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Local;
use App\Models\Campanha;

class LocalSeeder extends Seeder
{
    public function run()
    {
        $lookup = function ($titulo) {
            $camp = Campanha::where('titulo', $titulo)->first();
            return $camp ? $camp->id : 1;
        };

        $data = [

            // 1) LOTR locais
            'A Jornada do Anel' => [
                ['nome'=>'Mordor','descricao'=>'Terras de trevas e lava dominadas por Sauron.','imagem'=>'https://static.wikia.nocookie.net/lotr/images/6/6f/Mordor.png'],
                ['nome'=>'Rivendell','descricao'=>'Refúgio dos elfos, lugar de paz e conhecimento antigo.','imagem'=>'https://static.wikia.nocookie.net/lotr/images/1/1a/Rivendell.png'],
                ['nome'=>'Minas Tirith','descricao'=>'A cidade branca, fortaleza dos homens de Gondor.','imagem'=>'https://static.wikia.nocookie.net/lotr/images/7/7e/Minas_Tirith.png'],
                ['nome'=>'Moria','descricao'=>'Mina antiga cheia de perigos e ecos do passado.','imagem'=>'https://static.wikia.nocookie.net/lotr/images/2/2d/Moria.png'],
                ['nome'=>'The Shire','descricao'=>'Terra dos hobbits: campos verdes e vilarejos tranquilos.','imagem'=>'https://static.wikia.nocookie.net/lotr/images/9/9a/Shire.png'],
                ['nome'=>'Helm\'s Deep','descricao'=>'Fortaleza de Rohan, palco de batalhas decisivas.','imagem'=>'https://static.wikia.nocookie.net/lotr/images/8/84/Helms_Deep.png'],
                ['nome'=>'Isengard','descricao'=>'Torre e poço industrial sob controle de Saruman.','imagem'=>'https://static.wikia.nocookie.net/lotr/images/3/31/Isengard.png'],
                ['nome'=>'Great East Road','descricao'=>'Antiga estrada que cruza grandes porções da Terra Média.','imagem'=>'https://static.wikia.nocookie.net/lotr/images/a/a0/Great_East_Road.png'],
                ['nome'=>'Weathertop','descricao'=>'Colina estratégica com ruínas e memórias de batalhas.','imagem'=>'https://static.wikia.nocookie.net/lotr/images/2/20/Weathertop.png'],
                ['nome'=>'Lothlórien','descricao'=>'Floresta élfica, lar de beleza e magia antiga.','imagem'=>'https://static.wikia.nocookie.net/lotr/images/5/57/Lothlorien.png'],
            ],

            // 2) GOT locais
            'As Guerras dos Sete Reinos' => [
                ['nome'=>'Winterfell','descricao'=>'Fortaleza ancestral da Casa Stark.','imagem'=>'https://static.wikia.nocookie.net/gameofthrones/images/0/0a/Winterfell.png'],
                ['nome'=>'King\'s Landing','descricao'=>'Capital dos Sete Reinos e sede do Trono de Ferro.','imagem'=>'https://static.wikia.nocookie.net/gameofthrones/images/1/1c/King%27s_Landing.png'],
                ['nome'=>'The Wall','descricao'=>'Imensa muralha de gelo que protege do norte.','imagem'=>'https://static.wikia.nocookie.net/gameofthrones/images/2/2f/The_Wall.png'],
                ['nome'=>'Dragonstone','descricao'=>'Antiga fortaleza Targaryen, cheia de segredos.','imagem'=>'https://static.wikia.nocookie.net/gameofthrones/images/3/3b/Dragonstone.png'],
                ['nome'=>'Storm\'s End','descricao'=>'Fortaleza lendária da Casa Baratheon.','imagem'=>'https://static.wikia.nocookie.net/gameofthrones/images/4/4d/Storm%27s_End.png'],
                ['nome'=>'Highgarden','descricao'=>'Jardim e sede da Casa Tyrell, rica e fértil.','imagem'=>'https://static.wikia.nocookie.net/gameofthrones/images/5/5e/Highgarden.png'],
                ['nome'=>'Riverrun','descricao'=>'Castelo estrategicamente posicionado nas margens do rio.','imagem'=>'https://static.wikia.nocookie.net/gameofthrones/images/6/6f/Riverrun.png'],
                ['nome'=>'Dreadfort','descricao'=>'Fortaleza sombria e cruel da Casa Bolton.','imagem'=>'https://static.wikia.nocookie.net/gameofthrones/images/7/7d/Dreadfort.png'],
                ['nome'=>'The Eyrie','descricao'=>'Castelo inacessível nas montanhas, de onde se domina a vista.','imagem'=>'https://static.wikia.nocookie.net/gameofthrones/images/8/8e/The_Eyrie.png'],
                ['nome'=>'Meereen','descricao'=>'Cidade da Baía dos Escravos, palco de grandes conflitos.','imagem'=>'https://static.wikia.nocookie.net/gameofthrones/images/9/9a/Meereen.png'],
            ],

            // 3) Baldur's Gate locais
            'Mistérios de Baldur\'s Gate' => [
                ['nome'=>'Taverna Elfsong','descricao'=>'Taverna famosa por cantos e rumores em Baldur\'s Gate.','imagem'=>'https://static.wikia.nocookie.net/baldursgate/images/0/0b/Elfsong_Tavern.png'],
                ['nome'=>'Bazar da Ponte','descricao'=>'Mercado movimentado cheio de comerciantes e aventureiros.','imagem'=>'https://static.wikia.nocookie.net/baldursgate/images/1/1c/Bazaar.png'],
                ['nome'=>'Fortaleza dos Flaming Fist','descricao'=>'Quartel do grupo de mercenários de Baldur\'s Gate.','imagem'=>'https://static.wikia.nocookie.net/baldursgate/images/2/2d/Flaming_Fist_Fortress.png'],
                ['nome'=>'Outer Docks','descricao'=>'Docas externas onde muitas embarcações chegam e partem.','imagem'=>'https://static.wikia.nocookie.net/baldursgate/images/3/3e/Outer_Docks.png'],
                ['nome'=>'Undercity','descricao'=>'Rede subterrânea sombria e perigosa.','imagem'=>'https://static.wikia.nocookie.net/baldursgate/images/4/4f/Undercity.png'],
                ['nome'=>'Bridge District','descricao'=>'Distrito comercial próximo às pontes da cidade.','imagem'=>'https://static.wikia.nocookie.net/baldursgate/images/5/5a/Bridge_District.png'],
                ['nome'=>'Thieves\' Guild','descricao'=>'Refúgio dos ladrões e contratos sombrios.','imagem'=>'https://static.wikia.nocookie.net/baldursgate/images/6/6b/Thieves%27_Guild.png'],
                ['nome'=>'Temples District','descricao'=>'Área repleta de templos e cultos diversos.','imagem'=>'https://static.wikia.nocookie.net/baldursgate/images/7/7c/Temples_District.png'],
                ['nome'=>'High Harbor','descricao'=>'Porto nobre e próspero para embarcações maiores.','imagem'=>'https://static.wikia.nocookie.net/baldursgate/images/8/8d/High_Harbor.png'],
                ['nome'=>'Docks','descricao'=>'Docas internas com movimentação constante.','imagem'=>'https://static.wikia.nocookie.net/baldursgate/images/9/9e/Docks.png'],
            ],

            // 4) Dragon Age locais
            'Círculo do Dragão' => [
                ['nome'=>'Redcliffe','descricao'=>'Cidade costeira cercada por conflitos.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/0a/Redcliffe.png'],
                ['nome'=>'Orzammar','descricao'=>'Cidade anã nas profundezas com intrigas e tradições.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/0b/Orzammar.png'],
                ['nome'=>'Denerim','descricao'=>'Grande cidade política e econômica.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/0c/Denerim.png'],
                ['nome'=>'Stormcoast','descricao'=>'Região costeira com perigos e monstros.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/0d/Stormcoast.png'],
                ['nome'=>'Amaranthine','descricao'=>'Cidade em ruínas com memórias de guerras.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/0e/Amaranthine.png'],
                ['nome'=>'Val Royeaux','descricao'=>'Capital cultural com nobres e intrigas.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/0f/ValRoyce.png'],
                ['nome'=>'The Wastes','descricao'=>'Terras remotas e perigosas.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/0g/The_Wastes.png'],
                ['nome'=>'Deep Roads','descricao'=>'Antigos caminhos anões cheios de perigos.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/0h/Deeproads.png'],
                ['nome'=>'Ferelden Wilds','descricao'=>'Território selvagem cheio de ameaças naturais.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/0i/Ferelden_Wilds.png'],
                ['nome'=>'Ferelden Castle','descricao'=>'Fortaleza que domina a região central.','imagem'=>'https://static.wikia.nocookie.net/dragonage/images/0/0j/Ferelden_Castle.png'],
            ],

            // 5) Witcher locais
            'Caçada do Bruxo' => [
                ['nome'=>'Kaer Morhen','descricao'=>'Fortaleza dos bruxos e local de treinamento.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/0a/Kaer_Morhen.png'],
                ['nome'=>'Novigrad','descricao'=>'Cidade mercantil grande e cheia de intrigas.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/0b/Novigrad.png'],
                ['nome'=>'Skellige','descricao'=>'Arquipélago rústico e sangrento, com cultura forte.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/0c/Skellige.png'],
                ['nome'=>'Velen','descricao'=>'Território rural devastado por guerras e monstros.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/0d/Velen.png'],
                ['nome'=>'Nilfgaard','descricao'=>'Império expansivo com poder militar.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/0e/Nilfgaard.png'],
                ['nome'=>'Kaer Trolde','descricao'=>'Fortaleza costeira e sede de clãs.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/0f/Kaer_Trolde.png'],
                ['nome'=>'White Orchard','descricao'=>'Primeira vila com missões iniciais e segredos.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/0g/White_Orchard.png'],
                ['nome'=>'Skellige Isles','descricao'=>'Ilhas de guerreiros e navegações audazes.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/0h/Skellige_Isles.png'],
                ['nome'=>'Crow\'s Perch','descricao'=>'Ponto estratégico com história turbulenta.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/0i/Corvo_Bianco.png'],
                ['nome'=>'Novigrad Docks','descricao'=>'Docas movimentadas cheias de contrabando.','imagem'=>'https://static.wikia.nocookie.net/witcher/images/0/0j/Novigrad_Docks.png'],
            ],

            // 6) Skyrim locais
            'Conquista de Tamriel' => [
                ['nome'=>'Whiterun','descricao'=>'Cidade central e ponto de mercadorias.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/0/0a/Whiterun.png'],
                ['nome'=>'Solitude','descricao'=>'Capital cheia de intrigas políticas.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/3/3d/Solitude.png'],
                ['nome'=>'Riften','descricao'=>'Cidade dos ladrões e do comércio sombrio.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/4/4e/Riften.png'],
                ['nome'=>'Helgen','descricao'=>'Posto inicial destruído por dragões.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/2/2c/Helgen.png'],
                ['nome'=>'Markarth','descricao'=>'Cidade esculpida nas montanhas com história antiga.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/5/5f/Markarth.png'],
                ['nome'=>'High Hrothgar','descricao'=>'Santuário no topo da montanha dos Greybeards.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/6/6a/High_Hrothgar.png'],
                ['nome'=>'Morthal','descricao'=>'Vila pantanosa cercada de lendas.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/7/7b/Morthal.png'],
                ['nome'=>'Blackreach','descricao'=>'Rede de cavernas luminescentes com ruínas antigas.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/8/8c/Blackreach.png'],
                ['nome'=>'Solitude Plaza','descricao'=>'Praça principal da cidade de Solitude.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/9/9d/White_Run_Plaza.png'],
                ['nome'=>'Windhelm','descricao'=>'Cidade fria com tradição guerreira.','imagem'=>'https://static.wikia.nocookie.net/elderscrolls/images/1/1b/Skyrim_Night.png'],
            ],

            // 7) Dark Souls locais
            'Sombras de Lordran' => [
                ['nome'=>'Firelink Shrine','descricao'=>'Ponto central onde aventureiros retornam.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/1/1b/Firelink_Shrine.png'],
                ['nome'=>'Undead Burg','descricao'=>'Cidade inicial repleta de inimigos.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/2/2c/Undead_Burg.png'],
                ['nome'=>'Anor Londo','descricao'=>'Cidade majestosa com arquitetura divina.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/3/3d/Anor_Londo.png'],
                ['nome'=>'Blighttown','descricao'=>'Área pantanosa e traiçoeira.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/4/4e/Blighttown.png'],
                ['nome'=>'New Londo','descricao'=>'Cidade submersa com segredos esquecidos.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/5/5f/New_Londo.png'],
                ['nome'=>'Undead Parish','descricao'=>'Local sagrado e ponto de encontros perigosos.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/6/6a/Undead_Parish.png'],
                ['nome'=>'Demon Ruins','descricao'=>'Ruínas infestadas por demônios e lava.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/7/7b/Demon_Ruins.png'],
                ['nome'=>'Darkroot Garden','descricao'=>'Jardim sombrio com grandes árvores e segredos.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/8/8c/Darkroot_Garden.png'],
                ['nome'=>'The Depths','descricao'=>'Redes subterrâneas cheias de criaturas.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/9/9d/The_Depths.png'],
                ['nome'=>'Sen\'s Fortress','descricao'=>'Fortaleza de armadilhas e perigos mecânicos.','imagem'=>'https://static.wikia.nocookie.net/darksouls/images/0/0a/Bonfire.png'],
            ],

            // 8) WoW locais
            'Reinos de Azeroth' => [
                ['nome'=>'Stormwind','descricao'=>'Capital humana cheia de guarda e comércio.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/0/0a/Stormwind.png'],
                ['nome'=>'Icecrown','descricao'=>'Fortaleza gelada e domínio poderoso.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/1/1b/Icecrown.png'],
                ['nome'=>'Orgrimmar','descricao'=>'Capital dos orcs, centro de poder guerreiro.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/2/2c/Orgrimmar.png'],
                ['nome'=>'Undercity','descricao'=>'Cidade subterrânea com cultos sombrios.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/3/3d/Undercity.png'],
                ['nome'=>'Azuremyst','descricao'=>'Ilha mística com povos exóticos.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/4/4e/Azuremyst.png'],
                ['nome'=>'Dalaran','descricao'=>'Cidade flutuante de magos e pesquisa arcana.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/5/5f/Dalaran.png'],
                ['nome'=>'Gilneas','descricao'=>'Região isolada com tradições próprias.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/6/6a/Gilneas.png'],
                ['nome'=>'Hillsbrad','descricao'=>'Terra de conflitos e rota estratégica.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/7/7b/Hillsbrad.png'],
                ['nome'=>'Blasted Lands','descricao'=>'Território devastado e perigoso.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/8/8c/Blasted_Lands.png'],
                ['nome'=>'Westfall','descricao'=>'Região agrícola com vilas e vilarejos.','imagem'=>'https://static.wikia.nocookie.net/wowpedia/images/9/9d/Westfall.png'],
            ],

            // 9) EverQuest locais
            'Crônicas de Norrath' => [
                ['nome'=>'Freeport','descricao'=>'Cidade portuária movimentada e perigosa.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/0/0a/Freeport.png'],
                ['nome'=>'Neriak','descricao'=>'Cidade sombria dos elfos, cheia de segredos.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/1/1b/Neriak.png'],
                ['nome'=>'Halas','descricao'=>'Região montanhosa com tribos e desafios.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/2/2c/Halas.png'],
                ['nome'=>'Thundering Steppes','descricao'=>'Planícies vastas e cheias de perigos.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/3/3d/Thundering.png'],
                ['nome'=>'Royal Throne','descricao'=>'Trono real e centros de poder.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/4/4e/Throne.png'],
                ['nome'=>'EQ City','descricao'=>'Grande metrópole com guildas e intrigas.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/5/5f/EQ_City.png'],
                ['nome'=>'Open Field','descricao'=>'Campo aberto de encontros e patrulhas.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/6/6a/Field.png'],
                ['nome'=>'Ancient Crypt','descricao'=>'Cripta antiga cheia de mistérios.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/7/7b/Crypt.png'],
                ['nome'=>'Temple of Light','descricao'=>'Templo sagrado venerado por muitos.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/8/8c/Temple.png'],
                ['nome'=>'Dungeon Deep','descricao'=>'Masmorra perigosa e cheia de recompensas.','imagem'=>'https://static.wikia.nocookie.net/everquest/images/9/9d/Dungeon.png'],
            ],

            // 10) Sci-fi locais
            'Expedição Estelar' => [
                ['nome'=>'Base Nova Aurora','descricao'=>'Colônia humana recém-estabelecida em planeta temperado.','imagem'=>'https://images.unsplash.com/photo-1549921296-3b3c8b1f1b3d?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Porto Orbital','descricao'=>'Plataforma de acoplagem e comércio interstelar.','imagem'=>'https://images.unsplash.com/photo-1517976487492-5750f3195933?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Cinturão de Ruínas','descricao'=>'Resquícios de antiga civilização alienígena.','imagem'=>'https://images.unsplash.com/photo-1470770903676-69b98201ea1c?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Colmeia Mecânica','descricao'=>'Cidade automatizada com sistemas complexos.','imagem'=>'https://images.unsplash.com/photo-1496307042754-b4aa456c4a2d?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Planície Vermelha','descricao'=>'Planeta árido com tempestades e minerais raros.','imagem'=>'https://images.unsplash.com/photo-1483729558449-99ef09a8c325?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Santuário de Dados','descricao'=>'Centro de armazenamento de informações antigas.','imagem'=>'https://images.unsplash.com/photo-1476610182048-b716b8518aae?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Estação de Pesquisa Theta','descricao'=>'Instalação científica isolada para experimentos.','imagem'=>'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Ancoradouro 7','descricao'=>'Área portuária para naves mercantes e científicas.','imagem'=>'https://images.unsplash.com/photo-1475688621402-7f3b23f3f1d7?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Caverna Luminosa','descricao'=>'Formações naturais que emitem luz bioluminescente.','imagem'=>'https://images.unsplash.com/photo-1462331940025-496dfbfc7564?auto=format&fit=crop&w=400&q=80'],
                ['nome'=>'Campo de Descoberta','descricao'=>'Área designada para sondagens e escavações.','imagem'=>'https://images.unsplash.com/photo-1472289065668-ce650ac443d2?auto=format&fit=crop&w=400&q=80'],
            ],
        ];

        // Inserir no banco
        foreach ($data as $campTitulo => $locais) {
            $campId = $lookup($campTitulo);
            foreach ($locais as $l) {
                Local::create([
                    'campanha_id' => $campId,
                    'nome' => $l['nome'],
                    'descricao' => $l['descricao'],
                    'imagem' => $l['imagem'] ?? null,
                ]);
            }
        }
    }
}
