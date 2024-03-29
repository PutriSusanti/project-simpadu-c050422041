<?php

namespace App\Models;
use\Illuminate\Database\Eloquent\model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Schedule extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'subject_id',
        'hari',
        'jam_mulai',
        'jam_selesai',
        'ruangan',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function student()
    {
        return $this->belongsTo(User::class);
    }
}
