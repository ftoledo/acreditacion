<?php

/**
 * Registro filter form.
 *
 * @package    acreditacion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RegistroFormFilter extends BaseRegistroFormFilter
{
  public function configure()
  {
    unset ($this->widgetSchema['sid']);
    unset ($this->widgetSchema['serial']);
    unset ($this->widgetSchema['fecha']);
    unset ($this->widgetSchema['ip']);
    unset ($this->widgetSchema['uid']);
    unset ($this->widgetSchema['usuario']);
    unset ($this->widgetSchema['edad']);
    unset ($this->widgetSchema['sexo']);
    unset ($this->widgetSchema['localidad']);
    unset ($this->widgetSchema['provincia']);
    unset ($this->widgetSchema['pais']);
    unset ($this->widgetSchema['empresa']);
    unset ($this->widgetSchema['sitio']);
    unset ($this->widgetSchema['asistencia']);
    $this->widgetSchema['email']->setOption('with_empty', false);
    $this->widgetSchema['apellido']->setOption('with_empty', false);
    $this->widgetSchema['nombre']->setOption('with_empty', false);

  
  }
}
