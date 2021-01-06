<?php

declare(strict_types=1);

namespace php_tests\Character;

abstract class Human
{
	protected $age;
	protected $name;
	protected $surname;

	public function __construct($idname, $idsurname)
	{
		$this->age = rand(14, 19);
		$this->name = $idname;
		$this->surname = $idsurname;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function getSurname(): string
	{
		return $this->surname;
	}

	public function getAge(): int
	{
		return $this->age;
	}
}
