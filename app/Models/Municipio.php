<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipio';
    protected $fillable = ['Codigo', 'Nome', 'Uf'];
    public function estados()
    {
        return $this->belongsTo(Estado::class);
    }
}