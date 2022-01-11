<?php

namespace Gurdia\Adduser\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adduser extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'email',
        'password'
    ];
}
