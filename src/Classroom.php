<?php

declare(strict_types=1);

namespace php_tests;

class Classroom
{
	private $people;

	public function __construct(...$people)
	{
		$this->people = $people;
		foreach ($people as $person)
		{
			echo nl2br("As entered the classroom \n")
		}
	}
}
