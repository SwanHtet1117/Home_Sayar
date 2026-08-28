<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SchoolClass extends Model
{
    protected $table = 'classes';

    protected $fillable = [
        'slug',
        'name',
        'group_id',
        'sort_order',
    ];

    public function group(): BelongsTo
    {
        return $this->belongsTo(ClassGroup::class, 'group_id');
    }
}
