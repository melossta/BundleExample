<?php declare(strict_types=1);

namespace BundleExampleStep2\Service;

class TestingServiceDecorator extends TestingService
{
    public function __construct(private TestingService $inner)
    {
    }

    public function getMessage(): string
    {
        $original = $this->inner->getMessage();
        return $original . ' 🚀 Decorated in Admin!';
    }
}
