<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\barang;

class peminjam extends Model
{
    protected $table = 'peminjams';
    protected $fillable = ['user_id','barang_id','jumlah_pinjam'];
    public $timestamps = true;

	public function user()
	{
		return $this->belongsTo('App\User');
	}
     public function barang()
	{
		return $this->belongsTo('App\barang');
	}

}
