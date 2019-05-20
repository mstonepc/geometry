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
	
	/**
	 * Checks whether a given point is inside of this circle
	 *
	 * @param Point
	 * 
	 * @return boolean
	 */
	function pointInCircle(Point $point) {
		$x_diff_squared = pow($this->center->x - $point->x, 2);
		$y_diff_squared = pow($this->center->y - $point->y, 2);
		
		return ($x_diff_squared + $y_diff_squared) < pow($this->radius, 2);
	}
	
	/**
	 * Checks whether a given circle intersects with this circle
	 *
	 * @param Circle
	 * 
	 * @return boolean
	 */
	function circleIntersects(Circle $circle) {
		$x_diff_squared = pow($this->center->x - $circle->center->x, 2);
		$y_diff_squared = pow($this->center->y - $circle->center->y, 2);
		
		$distance = sqrt($x_diff_squared + $y_diff_squared);
		$combined_radius = ($this->radius + $circle->radius);
		
		return $distance < $combined_radius;
	}
}
