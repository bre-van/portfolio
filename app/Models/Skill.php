<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Skill extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'icon', 'sort_order'];

    protected static function booted(): void
    {
        static::creating(function (Skill $skill) {
            if (empty($skill->slug)) {
                $skill->slug = Str::slug($skill->name);
            }
        });
    }

    public function projects():BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }
}
