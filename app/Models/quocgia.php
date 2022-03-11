<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quocgia extends Model
{
    protected $table = 'quocgia';
    protected $primarykey = 'qg_id';

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function phim()
    {
        return $this->hasMany('App\Models\phim', 'qg_id','qg_id');
    }
}
