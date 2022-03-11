<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suatchieu extends Model
{
    protected $table = 'suatchieu';
    protected $primarykey = 'sc_id';

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function phong(){
        return $this->belongsTo('App\Models\phong', 'phong_id', 'sc_id');
    }
    public function phim(){
        return $this->belongsTo('App\Models\phim', 'phim_id', 'sc_id');
    }
    public function ve()
    {
        return $this->hasMany('App\Models\ve', 'sc_id','sc_id');
    }

}
