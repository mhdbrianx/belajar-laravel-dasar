<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Test as FrameworkTest;
use PHPUnit\TextUI\XmlConfiguration\TestSuite;
use PHPUnit\Util\Test;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class EnvironmentTest extends TestCase
{
    public function testGetEnv()
    {
        $youtube = env('YOUTUBE');

        self::assertEquals('Programmer Zaman Now', $youtube);
    }
}

