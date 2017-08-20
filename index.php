<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017-08-09
 * Time: 23:35
 */
class test1 {
	
	public static $x = 5;
	
	public function show()
	{
		return test1::$x;
	}
	
	public static function era()
	{
		return static::$x;
	}
}

class test2 extends test1 {
	
	public $xer;
	const PIZDA = 555;
	
	public function eras()
	{
		return self::PIZDA;
	}
}

class A {
	
	public static function kto()
	{
		echo __CLASS__ . 'aaaaaaaaaaaaaaaa';
	}
	
	public function test()
	{
		static::kto(); // późne wiązanie statyczne
	}
}

class B extends A implements menda {
	
	public static function kto()
	{
		echo __CLASS__ . 'bbbbbbbbbb';
	}
	
	public function cycki()
	{
	}
}

interface menda {
	
	public function cycki();
}

class e1 {
	
	public $x = 5;
	
	/**
	 * e1 constructor.
	 */
	public function __construct()
	{
		echo ' ';
	}
}

class e2 extends e1 {
	
	public $x = 10;
	
	/**
	 * e2 constructor.
	 */
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get()
	{
		return (new e1)->x;
	}
}

$a = new e2;
echo $a->get();