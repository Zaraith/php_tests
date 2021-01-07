<?php

declare(strict_types=1);

namespace php_tests;

class Classroom
{
	private $people = [];
	private $group_classroom = [];
	private $rank = 1;
	private $previous_score = -1;

	public function __construct(People ...$person)
	{
		$this->people = $people;
		foreach ($people as $person)
		{
			if(!isset($this->group_classroom[get_class($person)]))
        	{
                $this->group_classroom[get_class($person)] = [];
            }

            $this->group_classroom[get_class($person)][$person->getName()] = $person;));
		}
	}

	public function setRank()
    {
    	$this->$score = score()
    	foreach ($people as $person => $score)
    	{
    		if ($score != $previous_score)
    		{
            $previous_score = $score; 
            $rankings[$name] = array('score' => $score, 'rank' => $rank);
    		}
        }
        $rank++;
    }
    return $rankings;
}
