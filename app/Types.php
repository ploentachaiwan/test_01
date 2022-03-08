<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    protected $primaryKey ='id_types';

    protected $fillable = [
        'name'
    ];

    public function product(){
        return $this->hasMany(Product::class,'id_types');
    }
}
