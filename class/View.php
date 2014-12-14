<?php
require_once __DIR__ . '/clstor.php';
class View extends Storage{
  public $p;
    public function __construct($puth){

       $this->p = $puth;
    }
   public function display($template)
   {
      // ob_start();
       include $this->p.'/'.$template;
       //$ret = ob_get_contents();
      // ob_get_clean();
      // return $ret;

   }
}