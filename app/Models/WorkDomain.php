<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkDomain extends Model
{
    protected $fillable = [
        'name_uz',
        'name_en',
        'name_ru',
        'image_url',
        'icon',
        'sort_order',
    ];
}
