<?php

class DojoTest extends \PHPUnit_Framework_TestCase
{
	public function testBooleanSample()
	{
		$bool = true;
		$this->assertTrue($bool);

		$bool = false;
		$this->assertFalse($bool);
	}

	public function testEqualsSample()
	{
		$string = 'abc';
		$this->assertEquals('abc',$string);
	}

	public function testInstanceOfSample()
	{
		$date = new \Datetime();
		$this->assertInstanceOf('Datetime',$date);
	}

	public function testCountSample()
	{
		$array = array(1,2,3,4,5);
		$this->assertCount(5,$array);

	}

	public function testNullSample()
	{
		$null = null;
		$this->assertNull($null);
	}

	public function testArrayHasKey()
	{
		$array = array ('position1' => 1, 'position2' => 1);
		$this->assertArrayHasKey('position2',$array);
		$this->assertArrayNotHasKey('position3',$array);
	}
}
