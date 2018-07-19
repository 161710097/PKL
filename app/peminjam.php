<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjam extends Model
{
    protected $table = 'peminjams';
    protected $fillable = ['nama','jumlah','stock','kondisi'];
    public $timestamps = true;
}
