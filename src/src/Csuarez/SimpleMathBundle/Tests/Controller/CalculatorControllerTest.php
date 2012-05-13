<?php

namespace Csuarez\SimpleMathBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalculatorControllerTest extends WebTestCase
{
    public function testAdd() {
    	$client = static::createClient();
    	$crawler = $client->request('GET', '/add/1/2/');
    	$this->assertTrue($crawler->filter('html:contains("1 + 2 = 3")')->count() > 0);
    }

    public function testSubtract() {
    	$client = static::createClient();
    	$crawler = $client->request('GET', '/subtract/1/2/');
    	$this->assertTrue($crawler->filter('html:contains("1 - 2 = -1")')->count() > 0);
    }

    public function testMultiply() {
    	$client = static::createClient();
    	$crawler = $client->request('GET', '/multiply/1/2/');
    	$this->assertTrue($crawler->filter('html:contains("1 * 2 = 2")')->count() > 0);
    }

    public function testDivide() {
    	$client = static::createClient();
    	$crawler = $client->request('GET', '/divide/4/2/');
    	$this->assertTrue($crawler->filter('html:contains("4 / 2 = 2")')->count() > 0);
    }

    public function testDivideOnFail() {
    	$client = static::createClient();
    	$crawler = $client->request('GET', '/divide/1/0/');
    	$this->assertEquals(500, $client->getResponse()->getStatusCode());
    }
}
