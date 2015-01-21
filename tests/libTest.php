<?php
class LibTest extends PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $lib = new Lib();
        $this->assertEquals(2, $lib->add(1,1));
    }
}
?>