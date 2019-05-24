<?php

namespace guiasbn;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
	protected $fillable = ['name','image'];

	public function client()
	{
		return $this->hasMany(Client::class)->where('active', 1);
	}
}
