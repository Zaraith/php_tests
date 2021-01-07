<?php

declare(strict_types=1);

namespace php_tests;

interface Ranking
{
	public function score(): float;
}
