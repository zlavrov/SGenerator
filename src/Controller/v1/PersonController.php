<?php

declare(strict_types=1);

namespace App\Controller\v1;

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

#[Route('/person', name: 'person_')]
final class PersonController extends AbstractController
{
    public function __construct(public PersonManager $personManager) {}

    #[Route('/name', name: 'name', methods: [Request::METHOD_GET])]
    public function name(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->personManager->name($requestStack->getCurrentRequest()));
    }
}
