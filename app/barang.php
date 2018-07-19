<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'barangs';
    protected $fillable =['nama','jumlah','stock','kondisi'];
    public $timestamps = true;

     public function stock()
	{
		return $this->hasMany('App\stock');
	}
}
