<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UploadForm
 *
 * @author ragnarok
 */
class UploadForm extends sfForm{
  
  public function configure()
  {
    $modos = array(
        'delete'=> 'Eliminar todas los registros actuales antes de cargar',
        'override' => 'Sobreescribir entradas (la clave es la direcion de email)',
        'increment' => 'Cargar solo los nuevos (si ya existe un email no se vuelve a cargar)',
    );
    $this->setWidgets(
      array(
          'archivo' => new sfWidgetFormInputFile(),
          'modo' => new sfWidgetFormSelect(array('choices'=>$modos)),
      )
    );
    $this->setValidators(
      array(
          'archivo' => new sfValidatorFile(),
      )
    );
  }
}

?>
