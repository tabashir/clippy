<?php
include_once __DIR__ . '/../../app/clipping.php';

class ClippingTest extends PHPUnit_Framework_TestCase {

    public function testClipping() {
                
        $unit = new Clipping("This is a clipping");
        $this->assertEquals("This is a clipping", $unit->clipping);
    }

}
?>