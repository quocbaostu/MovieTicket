<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phong extends Model
{
    protected $table = 'phong';
    protected $primarykey = 'phong_id';

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function suatchieu()
    {
        return $this->hasMany('App\Models\suatchieu', 'phong_id','phong_id');
    }
}
