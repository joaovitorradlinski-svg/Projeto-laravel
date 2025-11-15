<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    protected $fillable = ['user_id', 'titulo', 'descricao', 'data_inicio', 'data_fim'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function locais()
    {
        return $this->hasMany(Local::class);
    }

    public function personagens()
    {
        return $this->hasMany(Personagem::class);
    }
}
