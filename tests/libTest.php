<?php
class LibTest extends PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $lib = new Lib();
        $this->assertEquals(2, $lib->add(1,1));
    }

    public function testSubtract()
    {
        $lib = new Lib();
        $this->assertEquals(0, $lib->subtract(1,1));
    }
}
?>