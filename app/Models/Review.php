<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'vote',
    ];

    public function User(){
        return $this->belongsTo(User::class,'id_user');
   }
   public function Courses(){
       return $this->belongsTo(Courses::class);
   }
}
