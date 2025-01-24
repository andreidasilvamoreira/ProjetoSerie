<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $table = 'series';
    protected $fillable = ['nome'];

    public $timestamps = false;

    public function Usuario() 
    {
        return $this->hasMany(Usuario::class);
    }

}