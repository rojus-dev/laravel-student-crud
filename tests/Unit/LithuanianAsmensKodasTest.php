<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use App\Rules\LithuanianAsmensKodas;

class LithuanianAsmensKodasTest extends TestCase
{
    #[Test]
    public function it_accepts_valid_asmens_kodas(): void
    {
        $rule = new LithuanianAsmensKodas();

        $this->assertTrue($rule->isValid('39912311236'));
    }

    #[Test]
    public function it_rejects_invalid_length(): void
    {
        $rule = new LithuanianAsmensKodas();

        $this->assertFalse($rule->isValid('12345'));
    }

    #[Test]
    public function it_rejects_invalid_checksum(): void
    {
        $rule = new LithuanianAsmensKodas();

        $this->assertFalse($rule->isValid('39912311235'));
    }

    #[Test]
    public function it_rejects_invalid_first_digit(): void
    {
        $rule = new LithuanianAsmensKodas();

        $this->assertFalse($rule->isValid('79912311236'));
    }
}