<?php

namespace CodeChallenge\Geometry;

/**
 * Represents a geometric circle
 */
class Circle {
	public $center;
	public $radius;
	
	function __construct(Point $center, float $radius) {
		$this->center = $center;
		$this->radius = $radius;
	}
}
