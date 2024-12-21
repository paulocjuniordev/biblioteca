<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Saida extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'leitor_id',
        'livro_id',
        'data_saida',
        'data_devolucao',
    ];



    public function leitor(): BelongsTo
    {
        return $this->belongsTo('App\Models\Leitor');
    }

    public function livro(): BelongsTo
    {
        return $this->belongsTo('App\Models\Livro');
    }

}
