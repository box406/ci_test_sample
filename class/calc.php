<?php
class Calc {

  public function plus($a, $b) {

    if (empty($a) || empty($b)) {
      return false;
    }   
    return $a + $b;
  }
  public function minus($a, $b) {
    if (empty($a) || empty($b)) {
      return false;
    }   
    return $a - $b;
  }
}
