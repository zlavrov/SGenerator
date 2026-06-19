<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/base/random-digits', name: 'base_random_digits')]
    public function baseRandomDigits(): Response
    {
        return $this->render('base/random_digits.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    #[Route('/base/number-between', name: 'base_number_between')]
    public function baseNumberBetween(): Response
    {
        return $this->render('base/number_between.html.twig', [
            'controller_name' => 'AboutUsController',
        ]);
    }

    #[Route('/base/random-number', name: 'base_random_number')]
    public function baseRandomNumber(): Response
    {
        return $this->render('base/random_number.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    #[Route('/base/random-float', name: 'base_random_float')]
    public function baseRandomFloat(): Response
    {
        return $this->render('base/random_float.html.twig', [
            'controller_name' => 'AboutUsController',
        ]);
    }

    #[Route('/address/coordinates', name: 'address_coordinates')]
    public function addressCoordinates(): Response
    {
        return $this->render('address/coordinates.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    #[Route('/address/address', name: 'address_address')]
    public function addressAddress(): Response
    {
        return $this->render('address/address.html.twig', [
            'controller_name' => 'AboutUsController',
        ]);
    }
}
