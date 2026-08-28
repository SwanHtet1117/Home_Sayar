<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassGroup extends Model
{
    protected $fillable = [
        'slug',
        'name',
        'sort_order',
    ];

    public function classes(): HasMany
    {
        return $this->hasMany(SchoolClass::class, 'group_id');
    }
}
