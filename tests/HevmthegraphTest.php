<?php
/**
 * Tests for HevmTheGraph
 */

use PHPUnit\Framework\TestCase;
use Hevmthegraph\Hevmthegraph;

class HevmthegraphTest extends TestCase {
    private Hevmthegraph $instance;

    protected function setUp(): void {
        $this->instance = new Hevmthegraph(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Hevmthegraph::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
