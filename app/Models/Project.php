<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'summary', 'description', 'started_at', 'finished_at', 'url', 'featured'];

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'project_skill', 'project_id', 'skill_id');
    }

    public function screenshots(): HasMany
    {
        return $this->hasMany(Screenshot::class);
    }
}
