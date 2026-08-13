<?php
/**
 * Tests for AxisLink
 */

use PHPUnit\Framework\TestCase;
use Axislink\Axislink;

class AxislinkTest extends TestCase {
    private Axislink $instance;

    protected function setUp(): void {
        $this->instance = new Axislink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Axislink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
