<?php
require_once '__init__.php';

class HomePageTest extends PHPUnit_Framework_TestCase {
    /** 
    * @var WebDriverSession
    */
    protected $_session;

    public function setUp() {
        parent::setUp();
        $web_driver = new WebDriver();
        $this->_session = $web_driver->session();
    }

    public function tearDown() {
        $this->_session->close();
        unset($this->_session);
        parent::tearDown();
    }

    public function test_main_page() {
        $this->_session->open('http://localhost/');
        print_r($this->_session->source());
        $this->assertSame('Clippy Web Clippings Database', $this->_session->title());
        $this->assertSame('Hello World', $this->_session->element('xpath','//body')->text());
    }
}


//        $titleElement = $this->_session->element('name', 'title');
//        $this->assertSame('Save a bookmark', $titleElement->text());
        
//        $login_link = $this->_session->element('xpath', "//a[@href='http://localhost/scuttle/login.php/']");
//        $login_link->click();
//        $this->assertSame('http://localhost/scuttle/login.php/', $this->_session->url());

?>