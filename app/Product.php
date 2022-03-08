<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id_product';
    protected $fillable = [
     
        'name',
        'image',
        'price',
        'detail',
        'id_types',
        'id_user',
    ];

    protected static function boot()

    {

        parent::boot();

        static::creating(function ($model) {

            $model->id_users = Auth::id();

        });

        static::updating(function ($model) {

            $model->id_users = Auth::id();

        });
    }

    public function types(){
        return $this->belongsTo(Types::class,'id_types');
    }

}
