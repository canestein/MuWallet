<?php
/**
 * Tests for MuWallet
 */

use PHPUnit\Framework\TestCase;
use Muwallet\Muwallet;

class MuwalletTest extends TestCase {
    private Muwallet $instance;

    protected function setUp(): void {
        $this->instance = new Muwallet(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Muwallet::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
