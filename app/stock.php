<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    protected $fillable = ['book_id', 'user_id', 'is_returned'];
    protected $casts = ['is_returned' => 'boolean',];

    public function barang()
	{
		return $this->belongsTo('App\barang');
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
