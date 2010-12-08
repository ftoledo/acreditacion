<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of actions
 *
 * @author ragnarok
 */
class defaultActions extends sfActions 
{
  //put your code here
  public function executeIndex(sfWebRequest $request) 
  {
    $this->redirect('registro/index');
  }
}

?>
