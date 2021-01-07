<?php

declare(strict_types=1);

namespace php_tests\Character;

use php_tests\Ranking;

class Student extends Human implements Ranking
{
	protected $score;

	public function __construct($idname)
	{
		parent::__construct($id);
		$this->formation = 'Fighter';
		$this->score = rand(80, 99);
	}

	public function description(): string
    {
        return "This student : {$this->name()}, is part of 2021's {$this->formation()} Formation. He is {$this->age()} years old. He is got a score of : {$this->score()} in the Fighting classe";
    }

    public function score(): float
    {
    	return $this->score;
    }


}
