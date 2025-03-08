<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tree extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['species', 'circumference', 'settlement', 'county_id', 'year'];

    public function county() : BelongsTo{
        return $this->belongsTo(County::class);
    }
}
