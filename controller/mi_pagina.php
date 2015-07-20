<?php


class mi_pagina extends fs_controller
{
    public $variable1;

    /**
    *El constructor llama al constuctor de la clase padre fs_controller.
     *En el constructor el primer parametro es una constante que es igual al mismo nombre de la clase.
     *El segundo parametro es el nombre de la pagina.
     *El tercer parametro es el nombre del menu donde va a estar la pagina.
     */
    function __construct()
    {

        parent::__construct(__CLASS__, 'mi_pagina', 'informes');
    }

    protected function process()
    {
        $this->variable1 = array(
            'manzana' => array('color' => 'roja', 'peso' => 200),
            'pera' => array('color' => 'verde', 'peso' => 300),
            'piña' => array('color' => 'amarilla', 'peso' => 600)
        );
    }
}




 ?>
