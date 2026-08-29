<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeacherProfile extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'gender',
        'dob',
        'nationality',
        'nrc',
        'phone',
        'email',
        'social_media_link',
        'city_id',
        'township_id',
        'detail_address',
        'degree',
        'graduated_at',
        'university_school',
        'career_level',
        'experience_year',
        'preferred_subject_ids',
        'preferred_class_ids',
        'preferred_township_ids',
        'experience',
        'teaching_video',
        'teaching_modes',
        'fees',
        'nrc_file',
        'degree_file',
        'other_files',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'dob' => 'date',
            'graduated_at' => 'date',
            'preferred_subject_ids' => 'array',
            'preferred_class_ids' => 'array',
            'preferred_township_ids' => 'array',
            'teaching_modes' => 'array',
            'other_files' => 'array',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function township(): BelongsTo
    {
        return $this->belongsTo(Township::class);
    }
}
