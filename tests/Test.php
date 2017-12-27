<?php

class SumIntervalsTest extends \PHPUnit\Framework\TestCase {
  public function testExamples() {
    // Non-overlapping intervals
    $this->assertEquals(4, sum_intervals([[1, 5]]));
    $this->assertEquals(8, sum_intervals([
      [1, 5],
      [6, 10]
    ]));
    // Overlapping intervals
    $this->assertEquals(4, sum_intervals([
      [1, 5],
      [1, 5]
    ]));
    $this->assertEquals(7, sum_intervals([
      [1, 4], // 3
      [7, 10], // 3
      [3, 5] // 1
    ]));
  }
}