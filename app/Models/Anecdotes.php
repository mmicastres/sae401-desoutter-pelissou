<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anecdotes extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    public $incrementing = False;
}
