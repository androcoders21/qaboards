<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class update extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $primaryKey = 'user_id';
}
