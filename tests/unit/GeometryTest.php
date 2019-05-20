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
	public function testPointInsideCircle() {
		$circle = new Circle(new Point(6.64, 3.43), 5.23);
		$point = new Point(1.8, 5.27);
		
		$this->assertTrue($circle->pointInCircle($point));
	}
	
	public function testPointNotInsideCircle() {
		$circle = new Circle(new Point(3.54, 11.2), 2.42);
		$point = new Point(2.12, 13.73);
		
		$this->assertFalse($circle->pointInCircle($point));
	}
	
	public function testCircleIntersectsCircle() {
		$circle = new Circle(new Point(-6.73, 1.8), 4);
		$circle2 = new Circle(new Point(-4, 2), .58);
		
		$this->assertTrue($circle->circleIntersects($circle2));
	}
	
	public function testCircleDoesNotIntersectsCircle() {
		$circle = new Circle(new Point(-3.74, 10.64), 4.66);
		$circle2 = new Circle(new Point(3.54, 11.2), 2.42);
		
		$this->assertFalse($circle->circleIntersects($circle2));
	}
	
	public function testLineIntersectsLineSegment() {
		$line = new Line(new Point(-4.5, 6.8), new Point(1.8, 5.27));
		$line2 = new Line(new Point(-4, 3), new Point(1.58, 5.56));
		
		$this->assertTrue($line->lineSegmentIntersects($line2));
	}
	
	public function testLineDoesNotIntersectsLineSegment() {
		$line = new Line(new Point(.34, 13.63), new Point(10.93, 15.84));
		$line2 = new Line(new Point(2.12, 13.73), new Point(12.78, 14.13));
		
		$this->assertFalse($line->lineSegmentIntersects($line2));
	}
	
	public function testLineIntersectsLine() {
		$line = new Line(new Point(0, 1), new Point(6, 1.1));
		$line2 = new Line(new Point(-2, 5), new Point(10, 5));
		
		$this->assertTrue($line->lineIntersects($line2));
	}
	
	public function testLineDoesNotIntersectsLine() {
		$line = new Line(new Point(0, 1), new Point(6, 1));
		$line2 = new Line(new Point(-2, 5), new Point(10, 5));
		
		$this->assertFalse($line->lineIntersects($line2));
	}
}
