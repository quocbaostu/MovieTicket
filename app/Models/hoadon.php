<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    protected $table = 'hoadon';
    protected $primarykey = 'hd_id';

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function social(){
        return $this->belongsTo('App\Models\social', 'social_id', 'hd_id');
    }
    public function ve()
    {
        return $this->hasMany('App\Models\ve', 'hd_id','hd_id');
    }

}
