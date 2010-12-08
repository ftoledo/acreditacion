<?php 
class Estadistica  {

  function getXSexo($sexo)
  {
    $q = new Doctrine_Query();
    $q->create();
    $q->from('Registro');
    $q->where('sexo = ?', $sexo);
    return $q->execute()->count();
  }
}
?>