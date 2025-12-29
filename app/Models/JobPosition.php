<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobPosition extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'current', 'start_date', 'end_date', 'location', 'company_id'];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function startDate(): String {
        return Carbon::parse($this->start_date)->format('m/Y');
    }

    public function endDate(): String
    {
        return Carbon::parse($this->end_date)->format('m/Y');
    }
}
