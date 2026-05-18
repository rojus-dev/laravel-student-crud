<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class LithuanianPhoneNumber implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!$this->isValid((string) $value)) {
            $fail('Telefono numeris turi būti lietuviškas, pvz. +37061234567 arba 061234567.');
        }
    }

    public function isValid(string $value): bool
    {
        $value = str_replace([' ', '-', '(', ')'], '', $value);

        return preg_match('/^(\+3706\d{7}|06\d{7})$/', $value) === 1;
    }
}