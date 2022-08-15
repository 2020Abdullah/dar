<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Escape extends Model
{
    protected $table = "escapes";
    protected $guarded = [];
    use HasFactory;
}
