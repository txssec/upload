<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';
    protected $primaryKey = 'id';
    public $incrementing = true;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $dates = ['created_at', 'deleted_at'];

    protected $fillable = [
        'name',   'src_back_rule', 'status',  'expiration_rule',  'mimes',  'disk',  'privacy',  'directory'
    ];
}
