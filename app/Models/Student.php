<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    // students have been allocated to many rooms over the time
    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'allocations');
    }

}
