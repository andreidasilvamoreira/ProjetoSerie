<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';

    protected $fillable = ['nome', 'email', 'senha'];
    public $timestamps = false;

    public function series()
    {
        return $this->belongsToMany(Serie::class, 'SeriesUsuarios', 'usuario_id', 'serie_id');
    }
}