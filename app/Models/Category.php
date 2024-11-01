<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = [];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
