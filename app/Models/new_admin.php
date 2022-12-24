<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class new_admin extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    protected $table = 'new_admin';
}
