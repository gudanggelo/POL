<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama','warna','harga','keterangan'
    ];
    public function Order()
    {
        return $this->belongsTo('App\User');
        #satu order hanya punya 1 user
    }
}
