<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ve extends Model
{
    protected $table = 'vephim';
    protected $primarykey = 've_id';


    public $timestamps = false;

    public function suatchieu(){
        return $this->belongsTo('App\Models\suatchieu', 'sc_id', 've_id');
    }
    public function hoadon(){
        return $this->belongsTo('App\Models\hoadon', 'hd_id', 've_id');
    }

}
