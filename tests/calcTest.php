<?php
require_once(dirname(dirname(__FILE__)) . "/vendor/autoload.php");
require_once(dirname(dirname(__FILE__)) . "/calc.php");

class CalcTest extends PHPUnit_Framework_TestCase
{
    public $calc;

    public function __construct() {
    
        $this->calc = new Calc();
    }

    public function testPlus() {


        $this->assertEquals(2, $this->calc->plus(1, 1));
        $this->assertEquals(false, $this->calc->plus('', 1));
        $this->assertEquals(false, $this->calc->plus(1, ''));
        $this->assertEquals(false, $this->calc->plus('', ''));
    }

    public function testMinus() {

        $this->assertEquals(1, $this->calc->minus(2, 1));
        $this->assertEquals(false, $this->calc->minus('', 1));
        $this->assertEquals(false, $this->calc->minus(1, ''));
        $this->assertEquals(false, $this->calc->minus('', ''));
    }    
}
