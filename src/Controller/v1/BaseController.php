<?php

declare(strict_types=1);

namespace App\Controller\v1;

use App\Manager\BaseManager;
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

#[Route('/base', name: 'base_')]
final class BaseController extends AbstractController
{
    public function __construct(public BaseManager $baseManager) {}

    #[Route('/random-digit', name: 'random-digit', methods: [Request::METHOD_GET])]
    public function randomDigit(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->baseManager->randomDigit($requestStack->getCurrentRequest()));
    }

    #[Route('/number-between', name: 'number-between', methods: [Request::METHOD_GET])]
    public function numberBetween(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->baseManager->numberBetween($requestStack->getCurrentRequest()));
    }

    #[Route('/random-number', name: 'random-number', methods: [Request::METHOD_GET])]
    public function randomNumber(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->baseManager->randomNumber($requestStack->getCurrentRequest()));
    }

    #[Route('/random-float', name: 'random-float', methods: [Request::METHOD_GET])]
    public function randomFloat(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->baseManager->randomFloat($requestStack->getCurrentRequest()));
    }
}
