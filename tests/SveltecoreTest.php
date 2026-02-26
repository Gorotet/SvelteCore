<?php
/**
 * Tests for SvelteCore
 */

use PHPUnit\Framework\TestCase;
use Sveltecore\Sveltecore;

class SveltecoreTest extends TestCase {
    private Sveltecore $instance;

    protected function setUp(): void {
        $this->instance = new Sveltecore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Sveltecore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
