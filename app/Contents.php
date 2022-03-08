<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Contents extends Model
{
    protected $table = 'contents';
    protected $primaryKey = 'id_contents';
    protected $fillable = [
        'text',
        'image',
        'id_users'
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

}