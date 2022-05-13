<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tag;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_courses', 'id_course', 'id_user');
    }
    public function teacher()
    {
        return $this->belongsToMany(User::class,'teacher_courses','id_course','id_user');
    }
    public function review()
    {
        return $this->belongsTo(Review::class);
    }
    public function tag()
    {
        return $this->belongsToMany(Tag::class,'course_tag','id_course','id_tag');
    }
}
