<?php

include_once __DIR__ . '/../../app/classes/Clipping.php';

class ClippingTest extends PHPUnit_Framework_TestCase {

    public function testClippingConstruction() {

        $unit = new Clipping("http://my.clippi.ng", "clipping title");
        
        $this->assertEquals("http://my.clippi.ng", $unit->getSource());
        $this->assertEquals("clipping title", $unit->getTitle());
    }

}

?>