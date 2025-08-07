<?php declare(strict_types=1);

namespace BundleExampleStep2\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use SwagExampleDispatcher\Event\ExampleEvent;

#[Route(defaults: ['_routeScope' => ['administration']])]
class AdminDispatchController extends AbstractController
{
    private EventDispatcherInterface $eventDispatcher;

    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    #[Route(path: '/api/_action/example/fire-event', name: 'api.action.example.fire-event', methods: ['POST'])]
    public function fireExampleEvent(): JsonResponse
    {
        // Create an instance of your custom event, passing any relevant data.
        $event = new ExampleEvent(['foobar'=>'Hello Shaip!']);

        // Dispatch the event using the old, two-argument syntax
        $this->eventDispatcher->dispatch($event);

        //You hav eto use this because on the listener this is where you define the string event name on the listener thats the reason why i ahd to change to only event.
//        $this->eventDispatcher->dispatch($event, ExampleEvent::EXAMPLE_EVENT);

        // Return a JSON response to confirm the action was successful.
        return new JsonResponse([
            'success' => true,
            'message' => 'Your custom event has been dispatched with the string name.'
        ]);
    }
}