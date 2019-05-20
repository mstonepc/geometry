<?php

namespace CodeChallenge\Geometry;

/**
 * Represents a geometric point
 */
class Point {
	public $x;
	public $y;
	
	function __construct(float $x, float $y) {
		$this->x = $x;
		$this->y = $y;
	}
}
