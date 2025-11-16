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

            'A Jornada do Anel' => [
                ['nome'=>'Mordor','descricao'=>'Terras de trevas e lava dominadas por Sauron.'],
                ['nome'=>'Rivendell','descricao'=>'Refúgio dos elfos, lugar de paz e conhecimento antigo.'],
                ['nome'=>'Minas Tirith','descricao'=>'A cidade branca, fortaleza dos homens de Gondor.'],
                ['nome'=>'Moria','descricao'=>'Mina antiga cheia de perigos e ecos do passado.'],
                ['nome'=>'The Shire','descricao'=>'Terra dos hobbits com campos verdes e vilarejos tranquilos.'],
                ['nome'=>'Helm\'s Deep','descricao'=>'Fortaleza de Rohan, palco de batalhas decisivas.'],
                ['nome'=>'Isengard','descricao'=>'Torre e região dominada por Saruman.'],
                ['nome'=>'Great East Road','descricao'=>'Antiga estrada que cruza a Terra Média.'],
                ['nome'=>'Weathertop','descricao'=>'Colina estratégica com ruínas antigas.'],
                ['nome'=>'Lothlórien','descricao'=>'Floresta élfica de beleza e magia.'],
            ],

            'As Guerras dos Sete Reinos' => [
                ['nome'=>'Winterfell','descricao'=>'Fortaleza ancestral da Casa Stark.'],
                ['nome'=>'King\'s Landing','descricao'=>'Capital dos Sete Reinos, sede do Trono de Ferro.'],
                ['nome'=>'The Wall','descricao'=>'Muralha de gelo que protege o norte.'],
                ['nome'=>'Dragonstone','descricao'=>'Antiga fortaleza Targaryen.'],
                ['nome'=>'Storm\'s End','descricao'=>'Fortaleza lendária da Casa Baratheon.'],
                ['nome'=>'Highgarden','descricao'=>'Sede da Casa Tyrell, fértil e rica.'],
                ['nome'=>'Riverrun','descricao'=>'Castelo estrategicamente posicionado.'],
                ['nome'=>'Dreadfort','descricao'=>'Fortaleza da Casa Bolton.'],
                ['nome'=>'The Eyrie','descricao'=>'Castelo nas montanhas, quase inacessível.'],
                ['nome'=>'Meereen','descricao'=>'Cidade da Baía dos Escravos.'],
            ],

            'Mistérios de Baldur\'s Gate' => [
                ['nome'=>'Taverna Elfsong','descricao'=>'Taverna famosa por cantos e rumores.'],
                ['nome'=>'Bazar da Ponte','descricao'=>'Mercado movimentado e repleto de comerciantes.'],
                ['nome'=>'Fortaleza dos Flaming Fist','descricao'=>'Quartel do grupo mercenário Flaming Fist.'],
                ['nome'=>'Outer Docks','descricao'=>'Docas externas de Baldur\'s Gate.'],
                ['nome'=>'Undercity','descricao'=>'Rede subterrânea perigosa.'],
                ['nome'=>'Bridge District','descricao'=>'Distrito comercial perto das pontes.'],
                ['nome'=>'Thieves\' Guild','descricao'=>'Refúgio dos ladrões e contratos sombrios.'],
                ['nome'=>'Temples District','descricao'=>'Área repleta de templos e cultos.'],
                ['nome'=>'High Harbor','descricao'=>'Porto nobre e movimentado.'],
                ['nome'=>'Docks','descricao'=>'Docas internas da cidade.'],
            ],

            'Círculo do Dragão' => [
                ['nome'=>'Redcliffe','descricao'=>'Cidade costeira cercada por conflitos.'],
                ['nome'=>'Orzammar','descricao'=>'Cidade anã nas profundezas.'],
                ['nome'=>'Denerim','descricao'=>'Grande centro político e econômico.'],
                ['nome'=>'Stormcoast','descricao'=>'Região costeira perigosa.'],
                ['nome'=>'Amaranthine','descricao'=>'Cidade em ruínas com memórias de guerra.'],
                ['nome'=>'Val Royeaux','descricao'=>'Capital cultural cheia de intrigas.'],
                ['nome'=>'The Wastes','descricao'=>'Terras remotas e hostis.'],
                ['nome'=>'Deep Roads','descricao'=>'Antigos caminhos anões repletos de perigos.'],
                ['nome'=>'Ferelden Wilds','descricao'=>'Território selvagem e ameaçador.'],
                ['nome'=>'Ferelden Castle','descricao'=>'Fortaleza central da região.'],
            ],

            'Caçada do Bruxo' => [
                ['nome'=>'Kaer Morhen','descricao'=>'Fortaleza dos bruxos e local de treinamento.'],
                ['nome'=>'Novigrad','descricao'=>'Cidade mercantil cheia de intrigas.'],
                ['nome'=>'Skellige','descricao'=>'Arquipélago rústico e guerreiro.'],
                ['nome'=>'Velen','descricao'=>'Território devastado por guerras.'],
                ['nome'=>'Nilfgaard','descricao'=>'Império expansivo e militarizado.'],
                ['nome'=>'Kaer Trolde','descricao'=>'Fortaleza costeira dos clãs.'],
                ['nome'=>'White Orchard','descricao'=>'Vila inicial com segredos.'],
                ['nome'=>'Skellige Isles','descricao'=>'Conjunto de ilhas de guerreiros.'],
                ['nome'=>'Crow\'s Perch','descricao'=>'Local estratégico com história turbulenta.'],
                ['nome'=>'Novigrad Docks','descricao'=>'Docas movimentadas e perigosas.'],
            ],

            'Conquista de Tamriel' => [
                ['nome'=>'Whiterun','descricao'=>'Cidade central com grande comércio.'],
                ['nome'=>'Solitude','descricao'=>'Capital com intrigas políticas.'],
                ['nome'=>'Riften','descricao'=>'Cidade dos ladrões e comércio ilícito.'],
                ['nome'=>'Helgen','descricao'=>'Fortaleza inicial destruída por dragões.'],
                ['nome'=>'Markarth','descricao'=>'Cidade esculpida nas montanhas.'],
                ['nome'=>'High Hrothgar','descricao'=>'Santuário no topo da montanha.'],
                ['nome'=>'Morthal','descricao'=>'Vila pantanosa cercada de lendas.'],
                ['nome'=>'Blackreach','descricao'=>'Cavernas luminescentes antigas.'],
                ['nome'=>'Solitude Plaza','descricao'=>'Praça principal de Solitude.'],
                ['nome'=>'Windhelm','descricao'=>'Cidade fria e tradicional.'],
            ],

            'Sombras de Lordran' => [
                ['nome'=>'Firelink Shrine','descricao'=>'Ponto central de descanso.'],
                ['nome'=>'Undead Burg','descricao'=>'Cidade inicial cheia de inimigos.'],
                ['nome'=>'Anor Londo','descricao'=>'Cidade majestosa com arquitetura divina.'],
                ['nome'=>'Blighttown','descricao'=>'Região pantanosa e perigosa.'],
                ['nome'=>'New Londo','descricao'=>'Cidade submersa e misteriosa.'],
                ['nome'=>'Undead Parish','descricao'=>'Local sagrado e perigoso.'],
                ['nome'=>'Demon Ruins','descricao'=>'Ruínas infestadas por demônios.'],
                ['nome'=>'Darkroot Garden','descricao'=>'Jardim sombrio e místico.'],
                ['nome'=>'The Depths','descricao'=>'Região subterrânea infestada.'],
                ['nome'=>'Sen\'s Fortress','descricao'=>'Fortaleza cheia de armadilhas.'],
            ],

            'Reinos de Azeroth' => [
                ['nome'=>'Stormwind','descricao'=>'Capital humana com comércio intenso.'],
                ['nome'=>'Icecrown','descricao'=>'Fortaleza gelada poderosa.'],
                ['nome'=>'Orgrimmar','descricao'=>'Capital dos orcs, forte e militar.'],
                ['nome'=>'Undercity','descricao'=>'Cidade subterrânea sombria.'],
                ['nome'=>'Azuremyst','descricao'=>'Ilha mística e exótica.'],
                ['nome'=>'Dalaran','descricao'=>'Cidade flutuante de magos.'],
                ['nome'=>'Gilneas','descricao'=>'Região isolada e tradicional.'],
                ['nome'=>'Hillsbrad','descricao'=>'Terras estratégicas em conflito.'],
                ['nome'=>'Blasted Lands','descricao'=>'Região devastada e perigosa.'],
                ['nome'=>'Westfall','descricao'=>'Região agrícola com vilas.'],
            ],

            'Crônicas de Norrath' => [
                ['nome'=>'Freeport','descricao'=>'Cidade portuária movimentada.'],
                ['nome'=>'Neriak','descricao'=>'Cidade sombria dos elfos.'],
                ['nome'=>'Halas','descricao'=>'Região montanhosa tribal.'],
                ['nome'=>'Thundering Steppes','descricao'=>'Planícies vastas e perigosas.'],
                ['nome'=>'Royal Throne','descricao'=>'Centro de poder e autoridade.'],
                ['nome'=>'EQ City','descricao'=>'Grande metrópole cheia de guildas.'],
                ['nome'=>'Open Field','descricao'=>'Campos abertos patrulhados.'],
                ['nome'=>'Ancient Crypt','descricao'=>'Cripta antiga e misteriosa.'],
                ['nome'=>'Temple of Light','descricao'=>'Templo sagrado venerado.'],
                ['nome'=>'Dungeon Deep','descricao'=>'Masmorra profunda e perigosa.'],
            ],

            'Expedição Estelar' => [
                ['nome'=>'Base Nova Aurora','descricao'=>'Colônia humana em planeta temperado.'],
                ['nome'=>'Porto Orbital','descricao'=>'Plataforma de acoplagem interstelar.'],
                ['nome'=>'Cinturão de Ruínas','descricao'=>'Restos de antiga civilização alienígena.'],
                ['nome'=>'Colmeia Mecânica','descricao'=>'Cidade automatizada e complexa.'],
                ['nome'=>'Planície Vermelha','descricao'=>'Planeta árido cheio de minerais.'],
                ['nome'=>'Santuário de Dados','descricao'=>'Centro de informação antiga.'],
                ['nome'=>'Estação Theta','descricao'=>'Instalação científica isolada.'],
                ['nome'=>'Ancoradouro 7','descricao'=>'Área portuária para naves.'],
                ['nome'=>'Caverna Luminosa','descricao'=>'Formações naturais bioluminescentes.'],
                ['nome'=>'Campo de Descoberta','descricao'=>'Área destinada a escavações.'],
            ],
        ];

        foreach ($data as $campTitulo => $locais) {
            $campId = $lookup($campTitulo);
            foreach ($locais as $l) {
                Local::create([
                    'campanha_id' => $campId,
                    'nome' => $l['nome'],
                    'descricao' => $l['descricao'],
                ]);
            }
        }
    }
}
