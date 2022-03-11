<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
    protected $table = 'danhmuc';
    protected $primarykey = 'dm_id';

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    public function phim()
    {
        return $this->hasMany('App\Models\phim', 'dm_id', 'dm_id');
    }
}
