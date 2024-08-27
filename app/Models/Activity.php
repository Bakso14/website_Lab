<?php

namespace App\Models;

use App\TypeActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = ['people_id', 'name', 'type', 'source'];

    protected $casts = [
        'type' => TypeActivity::class,
    ];

    function people()
    {
        return $this->belongsTo(People::class, 'people_id');    
    }
}
