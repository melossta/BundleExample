<?php declare(strict_types=1);

namespace BundleExampleStep2\Service;

class TestingService
{
    public function getMessage(): string
    {
        return 'Hello from MyExampleService at ' . date('Y-m-d H:i:s');
    }
}
