<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $table = 'university';
    protected $guarded = ['id'];

    //Universitas Punya Banyak Faculties
    public function faculties()
    {
        return $this->hasMany(Faculty::class);
    }
}
