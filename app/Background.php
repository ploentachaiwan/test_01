<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Background extends Model
{
    protected $table = 'background';
    protected $primaryKey = 'id_background';
    protected $fillable = [
        'name',
        'image',
        'id_users'
    ];

    public $timestamps = false;

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

}
