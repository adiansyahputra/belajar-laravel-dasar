<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    public function testConfig()
    {
        $firstName = config("contoh.author.first");
        $lastName = config("contoh.author.last");
        $email = config("contoh.email");
        $web = config("contoh.web");

        self::assertEquals("adi", $firstName);
        self::assertEquals("putra", $lastName);
        self::assertEquals("adi@gmail.com", $email);
        self::assertEquals("hoho.com", $web);
    }
}
