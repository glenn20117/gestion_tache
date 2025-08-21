<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'status',
        'owner_id',
    ];

    protected $dates = ['start_date', 'end_date'];

    // Relation des tâches
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
