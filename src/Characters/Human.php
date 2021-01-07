<?php

declare(strict_types=1);

namespace php_tests\Character;

use php_tests\People;

abstract class Human implements People
{
	protected $age;
	protected $name;

	public function __construct($idname)
	{
		$this->age = rand(14, 19);
		$this->name = $idname;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function getAge(): int
	{
		return $this->age;
	}
}
