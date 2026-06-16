<?php

declare(strict_types=1);

namespace App\Controller\v1;

use App\Manager\DateTimeManager;
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

#[Route('/date-time', name: 'date-time_')]
final class DateTimeController extends AbstractController
{
    public function __construct(public DateTimeManager $dateTimeManager) {}

    #[Route('/date-time', name: 'date_time', methods: [Request::METHOD_GET])]
    public function dateTime(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->dateTimeManager->dateTime($requestStack->getCurrentRequest()));
    }
}
