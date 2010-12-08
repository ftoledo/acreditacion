<?php
class statsActions extends sfActions {

  public function executeIndex (sfWebRequest $request)
  {

    $e = new Estadistica();
    $chl = array(); 

    $chdl['sexo'] = 'Masculino|Femenino';
    $chl['sexo'] = $e->getXSexo('M').'|'.$e->getXSexo('F');
    $this->chl = $chl;
    $this->chdl= $chdl;
  }
}
?>