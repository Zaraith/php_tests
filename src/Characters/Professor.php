<?php

declare(strict_types=1);

namespace php_tests\Character;

class Professor extends Human
{
	public function __construct($idname)
	{
		parent::__construct($id);
		$this->age = 45;
	}

	public function description(): string
    {
        return "This professor : {$this->name()}, is the professor of 2021 classroom. He is {$this->age()} years old.";
    }
}
