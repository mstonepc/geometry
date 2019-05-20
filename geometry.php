<?php

require_once 'vendor/autoload.php';

use CodeChallenge\Geometry\Point;
use CodeChallenge\Geometry\Circle;
use CodeChallenge\Geometry\Line;

// Create circle
$circle = new Circle(new Point(6, 3), 5);

// Create line
$line = new Line(new Point(0, 0), new Point(4, 2));

echo "\n Hello INE! ";
echo "\n Thank you for taking the time to review my coding challenge. \n";
echo "\n Below is a sample output of the circle and line objects I created: \n\n";
echo print_r(['circle' => $circle, 'line' => $line], true);
