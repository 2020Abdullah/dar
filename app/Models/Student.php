<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Escape;

class Student extends Model
{
    protected $table = "students";
    protected $guarded = [];
    use HasFactory;
}
