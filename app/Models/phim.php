<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phim extends Model
{
    protected $table = 'phim';
    protected $primarykey = 'phim_id';

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function theloai(){
        return $this->belongsTo('App\Models\theloai', 'cat_id', 'phim_id');
    }
    public function quocgia(){
        return $this->belongsTo('App\Models\quocgia', 'qg_id', 'phim_id');
    }
}
