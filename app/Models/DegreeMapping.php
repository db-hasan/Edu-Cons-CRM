<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DegreeMapping extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'campus_id',
        'degree_id',
        'status',
    ];
    public function campus(): BelongsTo
    {
        return $this->belongsTo(Campus::class, 'campus_id');
    }
    public function degree(): BelongsTo
    {
        return $this->belongsTo(Degree::class,'degree_id');
    }

    public function subjectmapping(): HasMany
    {
        return $this->hasMany(SubjectMapping::class);
    }
}
