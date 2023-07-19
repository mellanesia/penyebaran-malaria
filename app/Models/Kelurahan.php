<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    public $guarded = ['id'];
    protected $table = 'kelurahans';

    public function distrik(): BelongsTo
    {
        return $this->belongsTo(Distrik::class, 'id_distrik');
    }

    public function rw(): HasMany
    {
        return $this->hasMany(Rw::class, 'id_kelurahan');
    }


}
