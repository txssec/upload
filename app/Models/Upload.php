<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $table = 'uploads';
    protected $primaryKey = 'id';
    public $incrementing = true;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $dates = ['created_at', 'deleted_at', 'expiration', 'approved_at', 'disapproved_at'];

    protected $fillable = [
        'owner',  'size',  'src_front', 'src_back', 'status',  'expiration',  'mime',  'type_id',  'origin',  'disapproval_reason'
    ];
}
