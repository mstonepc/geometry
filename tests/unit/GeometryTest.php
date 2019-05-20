<?php

use PHPUnit\Framework\TestCase;
use CodeChallenge\Geometry\Point;
use CodeChallenge\Geometry\Circle;

class GeometryTest extends TestCase {
	public function testPointisValid() {
		$point = new Point(6, 3);		
		$this->assertTrue(isset($point->x) && isset($point->y));
	}
	
	public function testCircleisValid() {
		$circle = new Circle(new Point(6, 3), 5);		
		$this->assertTrue(isset($circle->center) && isset($circle->radius));
	}
}
