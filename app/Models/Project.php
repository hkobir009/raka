<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function current()
    {
        return $this->hasMany(CurrentProject::class);
    }

    public function upcoming()
    {
        return $this->hasMany(UpcomingProject::class);
    }
}
