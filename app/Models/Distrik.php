<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrik extends Model
{
    use HasFactory;
    public $guarded = [];
    protected $table = 'distriks';


    /*
     * Relasi One-to-Many
     * ==================
     * Buat function bernama kelurahan(), dimana model 'Kelurahan' akan memiliki
     * relasi One-to-Many terhadap model 'Distrik' melalui 'id_distrik'
     */


    public function kelurahan(): hasMany
    {
        return $this->hasMany(Kelurahan::class, 'id_distrik');
    }

}
