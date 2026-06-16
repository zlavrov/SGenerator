<?php

declare(strict_types=1);

namespace App\Controller\v1;

use App\Manager\InternetManager;
use App\Manager\PersonManager;
use App\Model\QueryStringModel;
use App\Security\AccessGroup;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryString;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/internet', name: 'internet_')]
final class InternetController extends AbstractController
{
    public function __construct(public InternetManager $internetManager) {}

    #[Route('/email', name: 'email', methods: [Request::METHOD_GET])]
    public function email(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->internetManager->email($requestStack->getCurrentRequest()));
    }

    #[Route('/domain', name: 'domain', methods: [Request::METHOD_GET])]
    public function domain(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->internetManager->domain($requestStack->getCurrentRequest()));
    }

    #[Route('/password', name: 'password', methods: [Request::METHOD_GET])]
    public function password(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->internetManager->password($requestStack->getCurrentRequest()));
    }

    #[Route('/userName', name: 'userName', methods: [Request::METHOD_GET])]
    public function userName(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->internetManager->userName($requestStack->getCurrentRequest()));
    }

    #[Route('/url', name: 'url', methods: [Request::METHOD_GET])]
    public function url(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->internetManager->url($requestStack->getCurrentRequest()));
    }

    #[Route('/slug', name: 'slug', methods: [Request::METHOD_GET])]
    public function slug(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->internetManager->slug($requestStack->getCurrentRequest()));
    }

    #[Route('/ip', name: 'ip', methods: [Request::METHOD_GET])]
    public function ip(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->internetManager->ip($requestStack->getCurrentRequest()));
    }

    #[Route('/macAddress', name: 'macAddress', methods: [Request::METHOD_GET])]
    public function macAddress(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->internetManager->macAddress($requestStack->getCurrentRequest()));
    }
}
