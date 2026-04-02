<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteContent extends Model
{
    protected $table = 'site_contents'; // Custom table name if needed, else Laravel handles pluralization
    
    protected $fillable = [
        'key',
        'lang',
        'content',
    ];

    // Composite unique constraints in Laravel are usually handled at the database level.
    // To handle them in Eloquent, you might need a trait or just ensure the migrations are correct.
}
