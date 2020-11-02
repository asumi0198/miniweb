<?php

namespace App\Models;

use App\Traits\hasImagePhoto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;
    use hasImagePhoto;

    protected $fillable = [
        'name', 'email', 'about', 'address', 'contact_person', 'contact_number', 'image_photo_path'
    ];
}
