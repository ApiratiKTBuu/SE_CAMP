<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvisorsModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'oe_advisors';
}
