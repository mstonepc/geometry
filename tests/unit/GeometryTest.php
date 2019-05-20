<?php

use PHPUnit\Framework\TestCase;
use CodeChallenge\Geometry\Point;

class GeometryTest extends TestCase {
	public function testPointisValid() {
		$point = new Point(6, 3);		
		$this->assertTrue(isset($point->x) && isset($point->y));
	}
}
