<?php declare(strict_types=1);

namespace BundleExampleStep2\Controller\Admin;

use BundleExampleStep2\Service\TestingService;
use Shopware\Core\Framework\Context;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route(defaults: ['_routeScope' => ['administration']])]
class TestingServiceController extends AbstractController
{
    public function __construct(private TestingService $testingService)
    {
    }

    #[Route(path: '/api/_action/bundle-example-step2/message', name: 'api.action.bundle-example-step2.message', methods: ['GET'])]
    public function getMessage(Context $context): JsonResponse
    {
        return new JsonResponse([
            'message' => $this->testingService->getMessage()
        ]);
    }
}
