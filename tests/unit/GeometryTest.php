<?php

use PHPUnit\Framework\TestCase;
use CodeChallenge\Geometry\Point;
use CodeChallenge\Geometry\Circle;
use CodeChallenge\Geometry\Line;

class GeometryTest extends TestCase {
	public function testPointisValid() {
		$point = new Point(6, 3);		
		$this->assertTrue(isset($point->x) && isset($point->y));
	}
	
	public function testCircleisValid() {
		$circle = new Circle(new Point(6, 3), 5);		
		$this->assertTrue(isset($circle->center) && isset($circle->radius));
	}
	
	public function testLineisValid() {
		$line = new Line(new Point(0, 0), new Point(4, 2));		
		$this->assertTrue(isset($line->pointA) && isset($line->pointB));
	}
}
