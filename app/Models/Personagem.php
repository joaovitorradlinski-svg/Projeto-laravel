<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{


    protected $fillable = ['campanha_id', 'nome', 'classe', 'raca', 'descricao', 'imagem'];

    public function campanha()
    {
        return $this->belongsTo(Campanha::class);
    }
}
