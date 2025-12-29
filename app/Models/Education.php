<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    public function startDate(): String {
        return Carbon::parse($this->start_date)->format('Y');
    }

    public function endDate(): String
    {
        return Carbon::parse($this->end_date)->format('Y');
    }
}
