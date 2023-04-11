<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    public $incrementing = False;

    protected $primaryKey = 'id_album';

    protected $keyType = 'int';
}
