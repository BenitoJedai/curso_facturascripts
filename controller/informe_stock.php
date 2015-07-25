<?php

/**
 *
 */
class informe_stock extends fs_controller
{

  public $inventario;
  public $offset;

  function __construct()
  {
    parent::__construct(__CLASS__, 'inventario', 'informes');
  }

  protected function process()
  {
    $this->offset = 0;

    if (isset($_GET['offset']))
    {
      $this->offset = intval($_GET['offset']);
    }

    $this->inventario = $this->db->select_limit("SELECT * FROM stocks ORDER BY referencia ASC", 3, $this->offset);
  }

}



 ?>
