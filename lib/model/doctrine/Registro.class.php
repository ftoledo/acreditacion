<?php

/**
 * Registro
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    acreditacion
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Registro extends BaseRegistro
{

  public function esAcreditado() {
    if ($this->asisencia) {
      return true;
    }
    else {
      return false;
    }
          
  }
}
