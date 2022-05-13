<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User;

class Lesson extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'lesson',
        'time',
        'discription',
        'requiment',
        'avatar'
    ];
    public function documents()
    {
        return $this->hasMany(document::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_lesson', 'id_lesson', 'id_user');
    }
    public function courses()
    {
        return $this->belongsTo(Courses::class);
    }
}
