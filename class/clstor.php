<?php
class Storage

implements Countable, Iterator
{   private $__date = array();
    public function __set($key,$value){

        $this->__date[$key] = $value;
    }
    public function __get($key){

        return $this->__date[$key];
    }


    public function count()
    {
        return count($this->__date);
    }


    public function current()
    {
        return current($this->__date);
    }


    public function next()
    {
        next($this->__date);
    }


    public function key()
    {
        return key($this->__date);
    }


    public function valid()
    {
        if (key($this->__date)==NULL) {
            return false;
        }
       else return true;
    }


    public function rewind()
    {
        reset($this->__date);
    }
}