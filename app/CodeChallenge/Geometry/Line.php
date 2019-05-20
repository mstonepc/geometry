<?php

namespace CodeChallenge\Geometry;

/**
 * Represents a geometric line or line segment
 */
class Line {
	public $pointA;
	public $pointB;
	
	function __construct(Point $pointA, Point $pointB) {
		$this->pointA = $pointA;
		$this->pointB = $pointB;
	}
}
