<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $fillable = [
        'nome',
        'email',
    ];

    //Um vendedor possui varias vendas
    public function vendas()
    {
        return $this->hasMany(Venda::class);
    }
}
