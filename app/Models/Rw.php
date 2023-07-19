<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rw extends Model
{
    use HasFactory, SoftDeletes;
    public $guarded = ['id'];
    protected $table = 'rws';


    public function kelurahan(): BelongsTo
    {
        return $this->belongsTo(kelurahan::class, 'id_kelurahan');
    }

}
