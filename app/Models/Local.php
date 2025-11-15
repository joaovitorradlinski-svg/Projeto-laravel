<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{

    protected $fillable = ['campanha_id', 'nome', 'descricao', 'imagem'];

    public function campanha()
    {
        return $this->belongsTo(Campanha::class);
    }
}
