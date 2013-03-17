<?php

require "/var/www/wc/trainee2013/oop4/core/classes/filter_post.class.php";

class filterTest extends PHPUnit_Framework_TestCase
{
	public $filter;
	public $_POST;

	public function setUp()
	{
		$_POST['name'] = 'Tamara';
		$_POST['staff_id'] = 1;
		$_POST['email'] = 'tamara@tamara.es';
		$_POST['text'] = '<p>Hola</p>';
		$_POST['text2'] = '<b>Hola</b>';
		$_POST['number'] = '2';
		$_POST['number2'] = '-2';

		$this->filter = new FilterPost();
		$this->input = array('name'=>'Tamara');

	}


	public function testGetHTMLParamTextWithHtmlValid()
	{
		$expected ='<p>Hola</p>';
		$this->assertEquals( 	$expected, 
								$this->filter->getValue('text', 'HTML', ''),
								'Error en HTML');
	}

	public function testGetHTMLParamTextTextWithHtmlInvalid()
	{
		$expected ='Hola';
		$this->assertEquals( 	$expected, 
								$this->filter->getValue('text2', 'HTML', ''),
								'Error en HTML');
	}

	public function testGetNumberNegativeNumbers()
	{
		$expected ='-2';
		$this->assertEquals( 	$expected, 
								$this->filter->getValue('number2', 'number'),
								'Error en número');
	}

	public function testGetNumberPositiveNumbers()
	{
		$expected ='2';
		$this->assertEquals( 	$expected, 
								$this->filter->getValue('number', 'number'),
								'Error en número');
	}

	public function testGetValueKeyExist()
	{
		$expected = 'Tamara';

		$this->assertEquals( 	$expected, 
								$this->filter->getValue('name', 'text'),
								'Error en key');
	}

	/*public function testGetValueKeyNotExist()
	{
		$this->setExpectedException('InvalidArgumentException');
		$this->filter->getValue('nombre', 'text');		
		
	}*/


	public function testGetValueEmail()
	{
		$expected = 'tamara@tamara.es';

		$this->assertEquals( 	$expected, 
								$this->filter->getValue('email', 'email'),
								'Error en key');		
		
	}

	public function testGetValues()
	{		
		$this->assertCount(7, $this->filter->getValues());
	}

	public function testGetValueFilterDefault()
	{
		$expected = 'tamara@tamara.es';
		$this->assertEquals( 	$expected, 
								$this->filter->getValue('email', 'hola'),
								'Error en key');
	}


	public function testGetValueDefault()
	{
		$expected = 'default';
		$this->assertEquals( 	$expected, 
								$this->filter->getValue( 'hola', 'hola', 'default' ),
								'No default');
	}

	
	

}