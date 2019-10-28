<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Padre extends Model
{
    protected $primaryKey = 'id_padres';
    protected $table = 'padres';

    protected $guarded = ['id_padres'];
    public $timestamps = false;

}
