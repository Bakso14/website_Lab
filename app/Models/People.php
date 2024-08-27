<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "email",
        "phone_number",
        "picture",
        "position",
        "rank",
        "interest",
    ];

    function activities()
    {
        return $this->hasMany(Activity::class, 'people_id');
    }
}
