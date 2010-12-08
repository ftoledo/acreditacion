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
class loadActions extends sfActions{
    //put your code here
  /**
   * cargar el archivo csv
   * con un formato como este:
   * Array
   *   (
   *       [0] => 12 (serial)
   *       [1] => 730 (id)
   *       [2] => 21/11/2010 - 03:30 (fecha)
   *       [3] => 190.190.70.247 (ip)
   *       [4] => 0 (uid)
   *       [5] =>  (usuario)
   *       [6] => danielavsierra@gmail.com (email)
   *       [7] => Sierra (apellido)
   *       [8] => Daniela (nmbre)
   *       [9] => 24 (edad)
   *      [10] => F (sexo)
   *      [11] => Villa Adelina (loclaidad)
   *      [12] => Buenos Aires (provincia)
   *      [13] => Argentina (pais)
   *      [14] => Poder Judicial de la Nación (empresa)
   *      [15] => danielavsierra.tumblr.com (web)
   *      [16] => S/N install fest
   *   )
   */
  public function executeIndex(sfWebRequest $request) 
  {
    $this->form = new UploadForm();
    if ($request->isMethod('post')) {
    

      $this->total_procesados = 0;
      $this->total_actualizados = 0;
      $this->total_agregados = 0;
      
      /**
       * si era delete borramos toda la tabla antes
       */
      if ($request->getParameter('modo') == 'delete') {
        RegistroTable::truncate();
      }
      
      $linea = array();
      $archivo = $request->getFiles('archivo');
      if (($hArchivo = @fopen($archivo['tmp_name'],'r')) !== FALSE) {
        //por cada linea
        while (($linea = fgetcsv($hArchivo, 1000, ";")) !== FALSE) {
          $this->total_procesados++;
          
          if ($request->getParameter('modo') == 'delete') {
            // crear registro
            $r = new Registro();
            $this->total_agregados++;
          }
          elseif ($request->getParameter('modo') == 'override') {
            $r = Doctrine::getTable('Registro')->findOneByEmail($linea[6]);
            if (!$r) {
              $r = new Registro();
              $this->total_agregados++;
            } 
            else {
              $this->total_actualizados++;
            }
          }
          elseif ($request->getParameter('modo') == 'increment') {
            $r = Doctrine::getTable('Registro')->findOneByEmail($linea[6]);
            if ($r) {
              continue;
            }
            else {
              $r = new Registro;
              $this->total_agregados++;
          }
          }
          $r->serial = $linea[0];
          $r->sid = $linea[1];
          $r->fecha = $this->convertir_fecha($linea[2]);
          $r->ip = $linea[3];
          $r->uid = $linea[4];
          $r->usuario = $linea[5];
          $r->email = $linea[6];
          $r->apellido = utf8_encode($linea[7]);
          $r->nombre = utf8_encode($linea[8]); 
          $r->edad = $linea[9];
          $r->sexo = $linea[10];
          $r->localidad = utf8_encode($linea[11]);
          $r->provincia = utf8_encode($linea[12]);
          $r->pais = utf8_encode($linea[13]);
          $r->empresa = utf8_encode($linea[14]);
          $r->sitio = utf8_encode($linea[15]);
          $r->install_fest = trim(strtoupper($linea[16])) =='S' ? true : false;
          $r->save();
        }
        fclose($hArchivo);
        //cerrar archivo
        $this->redirect(sprintf('load/upload?t=%d&i=%d&u=%d',$this->total_procesados,$this->total_agregados,$this->total_actualizados));
      }
      else {
        $this->getUser()->setFlash('error', 'Error al abrir el archivo.');
      }
  
      
    
    }
  }
  public function executeUpload(sfWebRequest $request) 
  {
    $this->t = $request->getParameter('t');
    $this->i = $request->getParameter('i');
    $this->u = $request->getParameter('u');
    
  }
  /**
   * convierte la fecha del csv (dd/mm/yyyy - HH:ii) a yyyy-mm-dd HH:ii
   */
  private function convertir_fecha($dato) 
  {
    list($fecha, $hora) = explode('-', $dato);
    list ($d,$m,$y) = explode('/',trim($fecha));
    return ("$y-$m-$d ". trim($hora));
  }
}


?>
