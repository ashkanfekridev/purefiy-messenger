<?php

use PHPUnit\Framework\TestCase;
use Pure\Foundation\Application;

class ApplicationTest extends TestCase
{

    public function testApplicationVersionIsString()
    {
        $this->assertIsString(Application::VERSION);
    }
}