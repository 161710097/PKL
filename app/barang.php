<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\peminjam;
class barang extends Model
{
    protected $table = 'barangs';
    protected $fillable =['nama','jumlah','kondisi','foto'];
    public $timestamps = true;

     public function stock()
	{
		return $this->hasMany('App\stock');
	}

	public function peminjam()
	{
		return $this->hasMany('App\peminjam');
	}
}
