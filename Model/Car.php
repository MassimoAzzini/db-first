<?php 
class Car{
  public $key;
  public $characteristics_key;
  public $exemple;

  public function __construct(string $_key, array $_characteristics_key, $_exemple){
    $this->key = $_key;
    $this->characteristics_key = $_characteristics_key;
    $this->exemple = $_exemple;
  }
}
?>