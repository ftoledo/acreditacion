<?php

/**
 * Registro filter form base class.
 *
 * @package    acreditacion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRegistroFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'serial'         => new sfWidgetFormFilterInput(),
      'sid'            => new sfWidgetFormFilterInput(),
      'fecha'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'ip'             => new sfWidgetFormFilterInput(),
      'uid'            => new sfWidgetFormFilterInput(),
      'usuario'        => new sfWidgetFormFilterInput(),
      'email'          => new sfWidgetFormFilterInput(),
      'apellido'       => new sfWidgetFormFilterInput(),
      'nombre'         => new sfWidgetFormFilterInput(),
      'edad'           => new sfWidgetFormFilterInput(),
      'sexo'           => new sfWidgetFormFilterInput(),
      'localidad'      => new sfWidgetFormFilterInput(),
      'provincia'      => new sfWidgetFormFilterInput(),
      'pais'           => new sfWidgetFormFilterInput(),
      'empresa'        => new sfWidgetFormFilterInput(),
      'sitio'          => new sfWidgetFormFilterInput(),
      'asistencia'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'taller_android' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'taller_moodle'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'install_fest'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'certificado'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'serial'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sid'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'ip'             => new sfValidatorPass(array('required' => false)),
      'uid'            => new sfValidatorPass(array('required' => false)),
      'usuario'        => new sfValidatorPass(array('required' => false)),
      'email'          => new sfValidatorPass(array('required' => false)),
      'apellido'       => new sfValidatorPass(array('required' => false)),
      'nombre'         => new sfValidatorPass(array('required' => false)),
      'edad'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sexo'           => new sfValidatorPass(array('required' => false)),
      'localidad'      => new sfValidatorPass(array('required' => false)),
      'provincia'      => new sfValidatorPass(array('required' => false)),
      'pais'           => new sfValidatorPass(array('required' => false)),
      'empresa'        => new sfValidatorPass(array('required' => false)),
      'sitio'          => new sfValidatorPass(array('required' => false)),
      'asistencia'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'taller_android' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'taller_moodle'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'install_fest'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'certificado'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('registro_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Registro';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'serial'         => 'Number',
      'sid'            => 'Number',
      'fecha'          => 'Date',
      'ip'             => 'Text',
      'uid'            => 'Text',
      'usuario'        => 'Text',
      'email'          => 'Text',
      'apellido'       => 'Text',
      'nombre'         => 'Text',
      'edad'           => 'Number',
      'sexo'           => 'Text',
      'localidad'      => 'Text',
      'provincia'      => 'Text',
      'pais'           => 'Text',
      'empresa'        => 'Text',
      'sitio'          => 'Text',
      'asistencia'     => 'Boolean',
      'taller_android' => 'Boolean',
      'taller_moodle'  => 'Boolean',
      'install_fest'   => 'Boolean',
      'certificado'    => 'Boolean',
    );
  }
}
