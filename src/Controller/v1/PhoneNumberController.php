<?php

declare(strict_types=1);

namespace App\Controller\v1;

use App\Manager\PhoneNumberManager;
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

#[Route('/phone-number', name: 'phone_number_')]
final class PhoneNumberController extends AbstractController
{
    public function __construct(public PhoneNumberManager $phoneNumberManager) {}

    #[Route('/phone-number', name: 'phone-number', methods: [Request::METHOD_GET])]
    public function phoneNumber(RequestStack $requestStack): JsonResponse
    {
        return $this->json($this->phoneNumberManager->phoneNumber($requestStack->getCurrentRequest()));
    }
}
