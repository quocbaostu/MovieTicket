<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class theloai extends Model
{
    protected $table = 'theloai';
    public $primarykey = 'cat_id';

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function phim()
    {
        return $this->hasMany('App\Models\phim', 'cat_id', 'cat_id');
    }
}
