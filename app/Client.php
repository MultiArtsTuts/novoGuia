<?php

namespace guiasbn;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;
    protected $table = 'clients';
    protected $fillable = [
        'id',
		'category_id',
		'street_id',
		'name',
		'address',
		'phone',
		'email',
		'postalcode',
		'image',
		'description'
    ];
    
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function street()
    {
        return $this->belongsTo(Street::class);
    }

    public function getActiveAttributes($value)
    {
        switch ($value) {
            case '1':
                return 'Sim';
                break;
            
            default:
                return 'Não';
                break;
        }
        return $value;
    }
}
