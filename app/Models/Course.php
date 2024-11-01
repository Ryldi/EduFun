<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    
    protected $table = 'courses';
    protected $guarded = [];

    public function categories() 
    {
        return $this->belongsTo(Category::class);
    }
    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }
}
