<?php
require_once(dirname(dirname(__FILE__)) . "/vendor/autoload.php");
require_once(dirname(dirname(__FILE__)) . "/Calc.php");

class CalcTest extends PHPUnit_Framework_TestCase
{
    public function testPlus() {

        $calc = new Calc();

        $this->assertEquals(2, $calc->plus(1, 1));
    }
    
}
