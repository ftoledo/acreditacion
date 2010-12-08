<?php

/**
 * Registro form.
 *
 * @package    acreditacion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RegistroForm extends BaseRegistroForm
{
  public function configure()
  {
      $this->widgetSchema['sexo'] = new sfWidgetFormSelect(array('choices'=>array('M'=>'M','F'=>'F')));
      
      $this->validatorSchema['email'] = new sfValidatorEmail(array('required'=>true));
      $this->validatorSchema['apellido'] = new sfValidatorString(array('required'=>true));
      $this->validatorSchema['nombre'] = new sfValidatorString(array('required'=>true));
      $this->validatorSchema['edad'] = new sfValidatorInteger(array('required'=>false));

  }

}
