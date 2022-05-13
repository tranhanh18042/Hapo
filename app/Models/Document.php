<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Lesson;

class Document extends Model
{
    use HasFactory,Notifiable;
    use SoftDeletes;
    protected $fillable = [
        'video',
        'file',
        'document'
    ];
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
