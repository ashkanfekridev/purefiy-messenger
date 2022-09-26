<?php

namespace Pureify\Foundation;

class Application
{
    const VERSION = '1.0.0';

    protected string $basePath;

    public function __construct(string $basePath = null)
    {
        if ($basePath) {
            $this->basePath = $basePath;
        }
    }


    public function version(): string
    {
        return static::VERSION;
    }


}