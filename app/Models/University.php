<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class University extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'state_id',
        'name',
        'status',
    ];
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class,'state_id');
    }
}
