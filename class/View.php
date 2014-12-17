<?php
require_once __DIR__ . '/Storage.php';
class View extends Storage{
  public $p;
    public function __construct($puth){

       $this->p = $puth;
    }
   public function display($template)
   {

       ob_start();
           foreach ($this as $key => $value) {
               $$key = $value;
           }
               include $this->p.'/'.$template;
       $ret = ob_get_contents();
      ob_get_clean();
       return $ret;

   }
}