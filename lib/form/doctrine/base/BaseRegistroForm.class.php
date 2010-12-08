<?php

/**
 * Registro form base class.
 *
 * @method Registro getObject() Returns the current form's model object
 *
 * @package    acreditacion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRegistroForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'serial'         => new sfWidgetFormInputText(),
      'sid'            => new sfWidgetFormInputText(),
      'fecha'          => new sfWidgetFormDateTime(),
      'ip'             => new sfWidgetFormInputText(),
      'uid'            => new sfWidgetFormInputText(),
      'usuario'        => new sfWidgetFormInputText(),
      'email'          => new sfWidgetFormInputText(),
      'apellido'       => new sfWidgetFormInputText(),
      'nombre'         => new sfWidgetFormInputText(),
      'edad'           => new sfWidgetFormInputText(),
      'sexo'           => new sfWidgetFormInputText(),
      'localidad'      => new sfWidgetFormInputText(),
      'provincia'      => new sfWidgetFormInputText(),
      'pais'           => new sfWidgetFormInputText(),
      'empresa'        => new sfWidgetFormInputText(),
      'sitio'          => new sfWidgetFormInputText(),
      'asistencia'     => new sfWidgetFormInputCheckbox(),
      'taller_android' => new sfWidgetFormInputCheckbox(),
      'taller_moodle'  => new sfWidgetFormInputCheckbox(),
      'install_fest'   => new sfWidgetFormInputCheckbox(),
      'certificado'    => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'serial'         => new sfValidatorInteger(array('required' => false)),
      'sid'            => new sfValidatorInteger(array('required' => false)),
      'fecha'          => new sfValidatorDateTime(array('required' => false)),
      'ip'             => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'uid'            => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'usuario'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'email'          => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'apellido'       => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'nombre'         => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'edad'           => new sfValidatorInteger(array('required' => false)),
      'sexo'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'localidad'      => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'provincia'      => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'pais'           => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'empresa'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'sitio'          => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'asistencia'     => new sfValidatorBoolean(array('required' => false)),
      'taller_android' => new sfValidatorBoolean(array('required' => false)),
      'taller_moodle'  => new sfValidatorBoolean(array('required' => false)),
      'install_fest'   => new sfValidatorBoolean(array('required' => false)),
      'certificado'    => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('registro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Registro';
  }

}
