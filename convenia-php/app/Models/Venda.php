<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = [
        'valor_venda',
        'valor_comissao',
        'id_vendedor',
    ];

    //cada venda pertence possui um vendedor
    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class);
    }
}
