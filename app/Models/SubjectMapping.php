<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubjectMapping extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'degree_id',
        'subject_id',
        'course_duration',
        'admission_fee',
        'entry_requirment',
        'status',
    ];
    public function degree(): BelongsTo
    {
        return $this->belongsTo(Degree::class,'degree_id');
    }
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }
}
