<?php

require_once __DIR__.'/Storage.php';

class VoidTest extends PHPUnit_Framework_TestCase
{
	public function testForge()
	{
		$forged = \Foolz\Cache\FoolVoid::forge();
		$this->assertInstanceOf('Foolz\Cache\FoolVoid', $forged);

		// test instance system
		$this->assertSame($forged, \Foolz\Cache\FoolVoid::forge());
	}
}