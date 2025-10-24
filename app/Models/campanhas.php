<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class campanhas extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'titulo',
        'descricao',
        'data_inicio'
    ];

    public function mestre()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function personagens()
    {
        return $this->hasMany(Personagem::class);
    }


    public function sessoes()
    {
        return $this->hasMany(Sessao::class);
    }

    public function locais()
    {
        return $this->hasMany(Local::class);
    }
}
