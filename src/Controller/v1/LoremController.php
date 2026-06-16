<?php

declare(strict_types=1);

namespace App\Controller\v1;

use App\Manager\LoremManager;
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

#[Route('/lorem', name: 'lorem_')]
final class LoremController extends AbstractController
{
    public function __construct(public LoremManager $loremManager) {}

    #[Route('/words', name: 'words', methods: [Request::METHOD_GET])]
    public function words(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->loremManager->words($requestStack->getCurrentRequest()));
    }

    #[Route('/sentences', name: 'sentences', methods: [Request::METHOD_GET])]
    public function sentences(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->loremManager->sentences($requestStack->getCurrentRequest()));
    }

    #[Route('/paragraphs', name: 'paragraphs', methods: [Request::METHOD_GET])]
    public function paragraphs(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->loremManager->paragraphs($requestStack->getCurrentRequest()));
    }

    #[Route('/text', name: 'text', methods: [Request::METHOD_GET])]
    public function text(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->loremManager->text($requestStack->getCurrentRequest()));
    }
}
