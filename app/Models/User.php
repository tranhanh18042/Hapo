<?php

namespace App\Models;

use Lesson;
use Course;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Review;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function course()
    {
        return $this->belongsToMany(Course::class, 'user_courses', 'id_user', 'id_courses');
    }
    public function lesson()
    {
        return $this->belongsToMany(Lesson::class, 'user_lesson', 'id_user', 'id_lesson');
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }
    public function teacher()
    {
        return $this->belongsToMany(Course::class, 'teacher_courses', 'id_user', 'id_courses');
    }
}
