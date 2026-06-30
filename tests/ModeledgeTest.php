<?php
/**
 * Tests for ModelEdge
 */

use PHPUnit\Framework\TestCase;
use Modeledge\Modeledge;

class ModeledgeTest extends TestCase {
    private Modeledge $instance;

    protected function setUp(): void {
        $this->instance = new Modeledge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Modeledge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
