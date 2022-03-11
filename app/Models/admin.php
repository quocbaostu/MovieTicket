<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;


class admin extends Model
{
    protected $table = 'admin';
    protected $primarykey = 'username';

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function phim()
    {
        return $this->hasMany('App\Models\phim', 'username', 'username');
    }
}
