<?php

namespace App\Models;

use Courses;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Lesson;
use Review;

class User extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'phone_number',
        'address',
        'birthday',
        'about',
        'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses()
    {
        return $this->belongsToMany(Courses::class, 'user_courses', 'id_user', 'id_courses');
    }
    public function lesson()
    {
        return $this->belongsToMany(Lesson::class, 'user_lesson', 'id_user', 'id_lesson');
    }
    public function review()
    {
        return $this->hasMany(Review::class, 'id_user');
    }
    public function teachers()
    {
        return $this->belongsToMany(Courses::class, 'teacher_courses', 'id_user', 'id_courses');
    }
}
