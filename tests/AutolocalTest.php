<?php
/**
 * Tests for AutoLocal
 */

use PHPUnit\Framework\TestCase;
use Autolocal\Autolocal;

class AutolocalTest extends TestCase {
    private Autolocal $instance;

    protected function setUp(): void {
        $this->instance = new Autolocal(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Autolocal::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
