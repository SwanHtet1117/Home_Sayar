<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'user_role';

    protected $fillable = ['role'];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
