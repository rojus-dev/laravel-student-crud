<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use App\Rules\LithuanianPhoneNumber;

class LithuanianPhoneNumberTest extends TestCase
{
    #[Test]
    public function it_accepts_phone_with_lithuanian_prefix(): void
    {
        $rule = new LithuanianPhoneNumber();

        $this->assertTrue($rule->isValid('+37061234567'));
    }

    #[Test]
    public function it_accepts_phone_starting_with_0(): void
    {
        $rule = new LithuanianPhoneNumber();

        $this->assertTrue($rule->isValid('061234567'));
    }

    #[Test]
    public function it_rejects_too_short_phone(): void
    {
        $rule = new LithuanianPhoneNumber();

        $this->assertFalse($rule->isValid('06123'));
    }

    #[Test]
    public function it_rejects_foreign_phone(): void
    {
        $rule = new LithuanianPhoneNumber();

        $this->assertFalse($rule->isValid('+37161234567'));
    }
}