<?php
class WebTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('https://www.baidu.com/');
    }

    public function testTitle()
    {
        $this->url('https://www.baidu.com/');
        $this->assertEquals('Example WWW Page', $this->title());
    }

}
?>
