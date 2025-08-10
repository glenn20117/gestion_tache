<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailContacts extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email_address',
        'subject',
        'content',
    ];
}
