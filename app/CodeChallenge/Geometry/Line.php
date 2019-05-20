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
	
	/**
	 * Checks whether a given line intersects with this line
	 *
	 * @param Line
	 * 
	 * @return boolean
	 */
	function lineSegmentIntersects(Line $line) {
		$dir1 = $this->_getDir($this->pointA, $this->pointB, $line->pointA);
		$dir2 = $this->_getDir($this->pointA, $this->pointB, $line->pointB);
		$dir3 = $this->_getDir($line->pointA, $line->pointB, $this->pointA);
		$dir4 = $this->_getDir($line->pointA, $line->pointB, $this->pointB);
		
		if ($dir1 != $dir2 && $dir3 != $dir4) { return true; }
		if ($dir1 == 0 && $this->_onSegment($line->pointA)) { return true; }
		if ($dir2 == 0 && $this->_onSegment($line->pointB)) { return true; }
		if ($dir3 == 0 && $line->_onSegment($this->pointA)) { return true; }
		if ($dir4 == 0 && $line->_onSegment($this->pointB)) { return true; }
		
		return false;
	}
	
	/**
	 * Checks whether a given line intersects with this line
	 *
	 * @param Line
	 * 
	 * @return boolean
	 */
	function lineIntersects(Line $line) {		
		return ($this->_getSlope() != $line->_getSlope());
	}
	
	/**
	 * Determines whether given point is on this line segment or not
	 * 
	 * @param Point
	 * 
	 * @return boolean
	 */
	private function _onSegment(Point $point) {
		return ($point->x <= max($this->pointA->x, $this->pointB->x)
			&& $point->x <= min($this->pointA->x, $this->pointB->x)
			&& $point->y <= max($this->pointA->y, $this->pointB->y)
			&& $point->y <= min($this->pointA->y, $this->pointB->y));
	}
	
	/**
	 * Gets the direction based on 3 given points
	 * 
	 * @param Point a
	 * @param Point b
	 * @param Point c
	 *
	 * @return int (0 = collinear, 1 = clockwise, 2 = anti-clockwise)
	 */
	private function _getDir(Point $a, Point $b, Point $c) {
		$value = ($b->y -$a->y) * ($c->x - $b->x);
		$value -= ($b->x - $a->x) * ($c->y - $b->y);
		
		if ($value == 0) {
			return 0;
		} 
		
		return ($value < 0) ? 2 : 1;
	}
	
	/**
	 * Gets the slope of this line
	 *
	 * @return float
	 */
	private function _getSlope() {
		$compare_x = $this->pointB->x - $this->pointA->x;
		$compare_y = $this->pointB->y - $this->pointA->y;

		return $compare_y / $compare_x;
	}
}
