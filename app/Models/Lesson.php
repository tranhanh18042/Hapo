<?php

namespace App\Models;

use Course;
use Document;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_lesson', 'id_lesson', 'id_user');
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function document()
    {
        return $this->hasMany(Document::class);
    }
}
