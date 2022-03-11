<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class social extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'social_id';
    protected $table = 'social';

}
