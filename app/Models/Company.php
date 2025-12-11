<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    protected $fillable = ['name', 'logo', 'website_url', 'description'];

    public function jobPositions(): HasMany
    {
        return $this->hasMany(JobPosition::class);
    }
}
