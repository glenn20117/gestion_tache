<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;  

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

    public function owner()
    {
        return $this->belongsTo(Log::class, 'owner_id');
    }
}
