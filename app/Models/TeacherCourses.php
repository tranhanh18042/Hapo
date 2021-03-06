<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherCourses extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'id_user',
        'id_courses'
    ];
}
