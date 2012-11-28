<?php

class HomePageTest extends PHPUnit_Framework_TestCase {
    /* @var $session WebDriverSession */
    protected $session;
    protected $base_url;

    public function setUp() {
        parent::setUp();
        $web_driver = new WebDriver();
        $this->session = $web_driver->session();
        $this->base_url = 'http://localhost:8000/';
    }

    public function tearDown() {
        $this->session->close();
        unset($this->session);
        parent::tearDown();
    }

    public function test_main_page() {
        $this->session->open($this->base_url);
        print_r($this->session->source());
        $this->assertSame('Clippy Web Clippings Database', $this->session->title());
        $this->assertSame('Hello World', $this->session->element('xpath','//body')->text());
        
    }
}


//        $titleElement = $this->_session->element('name', 'title');
//        $this->assertSame('Save a bookmark', $titleElement->text());
        
//        $login_link = $this->_session->element('xpath', "//a[@href='http://localhost/scuttle/login.php/']");
//        $login_link->click();
//        $this->assertSame('http://localhost/scuttle/login.php/', $this->_session->url());

?>