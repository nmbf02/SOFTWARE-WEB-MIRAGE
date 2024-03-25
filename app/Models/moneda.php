<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moneda extends Model
{
    use HasFactory;
    protected $table = 'moneda';
    public $timestamps = false;
}
