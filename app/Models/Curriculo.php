<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'cargo',
        'escolaridade_id',
        'observacao',
        'arquivo'
    ];

    public function escolaridade(){
        return $this->hasOne(Escolaridade::class);
    }
}
