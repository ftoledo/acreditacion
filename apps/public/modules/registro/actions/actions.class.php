<?php

require_once dirname(__FILE__).'/../lib/registroGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/registroGeneratorHelper.class.php';

/**
 * registro actions.
 *
 * @package    acreditacion
 * @subpackage registro
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class registroActions extends autoRegistroActions
{
  public function executeListAsistencia(sfWebRequest $request)
  {
    $r = Doctrine::getTable('Registro')->find($request->getParameter('id'));
    $this->forward404Unless($r);
    $r->asistencia = true;
    $r->save();
    $this->getUser()->setFlash('notice','Se ha marcado como asistente a ' . $r);
    $this->redirect('registro/index');
  }
  public function executeListAndroid(sfWebRequest $request)
  {
    $r = Doctrine::getTable('Registro')->find($request->getParameter('id'));
    $this->forward404Unless($r);
    $r->taller_android = true;
    $r->save();
    $this->getUser()->setFlash('notice','Se ha anotado al Taller Android a ' . $r);
    $this->redirect('registro/index');
  }
  
  public function executeListMoodle(sfWebRequest $request)
  {
    $r = Doctrine::getTable('Registro')->find($request->getParameter('id'));
    $this->forward404Unless($r);
    $r->taller_moodle = true;
    $r->save();
    $this->getUser()->setFlash('notice','Se ha anotado al Taller Moodle a ' . $r);
    $this->redirect('registro/index');
  }
  public function executeListInstall(sfWebRequest $request)
  {
    $r = Doctrine::getTable('Registro')->find($request->getParameter('id'));
    $this->forward404Unless($r);
    $r->install_fest = true;
    $r->save();
    $this->getUser()->setFlash('notice','Se ha anotado al Install Fest a ' . $r);
    $this->redirect('registro/index');
  }

  
}
