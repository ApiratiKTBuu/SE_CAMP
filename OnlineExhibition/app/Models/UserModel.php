<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    public $table = 'oe_users';
    public $timestamps = false;
    protected $primaryKey = 'user_id';
}
