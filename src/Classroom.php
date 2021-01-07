<?php

declare(strict_types=1);

namespace php_tests;

class Classroom
{
	private $person;

	public function __construct(People...$person)
	{
		$this->person = $person;
		foreach ($person as $people)
		{
			echo nl2br("As entered the classroom \n")
		}
	}

	public function ranking()
    {
        foreach($this->person as $person) {

        }
    }
}
