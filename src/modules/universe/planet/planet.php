<?php
namespace universe;

class planet {
  public $name;

  public function __construct($name) {
    $this->name = $name;
  }

  public function move($distance) {
    echo "The planet \"{$this->name}\" was moved {$distance} kilometers.<br>";
  }

  public static function information() {
    echo "This is an information of planets.<br>";
  }
}
?>