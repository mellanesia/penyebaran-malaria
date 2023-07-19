<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelurahan extends Model
{
    use HasFactory, SoftDeletes;
    public $guarded = ['id'];
    protected $table = 'kelurahans';

    /*
     * Relasi One-to-Many
     * =================
     */

    //  public function distrik()
    //  {
    //      // data model kelurahan dimiliki oleh model distrik melalui fk 'id_distrik'
    //      return $this->belongsTo(Distrik::class);

    //  }

    public function distrik(): BelongsTo
    {
        return $this->belongsTo(Distrik::class, 'id_distrik');
    }

    public function rw(): BelongsTo
    {
        return $this->hasMany(Rw::class, 'id_kelurahan');
    }


}
