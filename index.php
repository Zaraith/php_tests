<?php

include 'src/Character/Classroom.php'
include 'src/Character/Human.php';
include 'src/Character/Professor.php'
include 'src/Character/Student.php';

use php_tests\Classroom;
use php_tests\Human;
use php_tests\Professor;
use php_tests\Student;

$classroom = new Classroom(...[
		new Professor('Son', 'Goku'),
		new Student('Kurosaki', 'Ichigo'),
		new Student('Monkey.D', 'Luffy'),
		new Student('Uzumaki', 'Naruto'),
		new Student('Freecs', 'Gon'),
		new Student('Midoriya', 'Izuku'),
		new Student('Elric', 'Edward'),
		new Student('Walker', 'Allen'),
		new Student('Sawada', 'Tsunayoshi'),
	]
);
