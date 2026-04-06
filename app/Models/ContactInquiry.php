<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInquiry extends Model
{
    protected $fillable = [
        'full_name', // Changed from snake case to match standard Laravel Eloquent
        'company',
        'email',
        'message',
        'status',
    ];
}
