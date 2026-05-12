<?php
/**
 * Tests for PolarsData
 */

use PHPUnit\Framework\TestCase;
use Polarsdata\Polarsdata;

class PolarsdataTest extends TestCase {
    private Polarsdata $instance;

    protected function setUp(): void {
        $this->instance = new Polarsdata(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Polarsdata::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
