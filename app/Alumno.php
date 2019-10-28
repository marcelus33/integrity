<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Padre;

class Alumno extends Model
{
    protected $primaryKey = 'id_alumno';
    protected $table = 'alumnos';

    protected $guarded = ['id_alumno'];
    public $timestamps = false;

    public function padres()
    {
       return $this->belongsTo(Padre::class, 'id_padres');
    }

}
