<?php

/** 
 * Trait para incluir en los controllers las opciones 
 * de generar las rutas de operaciones CRUD
 * Importante tener en cuenta que se generaran rutas nombreModelo/action/param
 * o en el caso particular del edit seria nombreModelo/param/action 
*/ 

namespace App\Http\Traits;

Trait OperacionesTrait
{   
    
    private $path;

    public function __construct()
    {
        $this->path = asset('');
    }
    /**
     * @param  string  $className
     * @return string
     */
    public function getCreateOptions($className)
    {
        return array("$this->path$className/"=>'Buscar');
    }

    public function getEditOptions($className, $id)
    {
        return array("$this->path$className/create"=>'Nuevo',
                     "$this->path$className/$id"=>'Mostrar',
                     "$this->path$className/"=>'Buscar',
        );
    }

    public function getShowOptions($className, $id)
    {
        return array("$this->path$className/$id/edit"=>'Editar', 
                     "$this->path$className/$id"=>'Borrar', 
                     "$this->path$className/create"=>'Nuevo', 
                     "$this->path$className/"=>'Buscar' );
    }

    public function getIndexOptions($className)
    {
        return array("$this->path$className/create"=>'Nuevo');
    }

    public function getDefaultOptions($className)
    {
        return array("$this->path$className/create"=>'Nuevo', 
        "$this->path$className/"=>'Buscar'); 
    }
} 