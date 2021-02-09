<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Municipio;

class Estado extends Model
{
    protected $table = 'estado';
    protected $fillable = ['CodigoUf', 'Nome', 'Uf', 'Regiao'];

    public function municipios()
    {
        return $this->hasMany(Municipio::class);
    }
}