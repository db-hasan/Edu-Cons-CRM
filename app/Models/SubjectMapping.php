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
        'campus_id',
        'degree_mapping_id',
        'subject_id',
        'course_duration',
        'admission_fee',
        'entry_requirement',
        'status',
    ];

    public function campus(): BelongsTo
    {
        return $this->belongsTo(Campus::class, 'campus_id');
    }

    public function degreemapping(): BelongsTo
    {
        return $this->belongsTo(DegreeMapping::class,'degree_mapping_id');
    }
    public function degree(): BelongsTo
    {
        return $this->belongsTo(Degree::class,'degree_id');
    }
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }
}
