<?php

declare(strict_types=1);

namespace App\Controller\v1;

use App\Manager\AddressManager;
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

#[Route('/address', name: 'address_')]
final class AddressController extends AbstractController
{
    public function __construct(public AddressManager $addressManager) {}

    #[Route('/coordinates', name: 'coordinates', methods: [Request::METHOD_GET])]
    public function coordinates(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->addressManager->coordinates($requestStack->getCurrentRequest()));
    }

    #[Route('/address', name: 'address', methods: [Request::METHOD_GET])]
    public function address(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->addressManager->adderss($requestStack->getCurrentRequest()));
    }
}
