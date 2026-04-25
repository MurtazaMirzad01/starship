<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $totalStarShips = 546;
        $myship = [
            'name' => 'Ship 1',
            'owner' => 'John Doe',
            'pass' =>   '123qwe'
        ];
        return $this->render('main/homepage.html.twig', [
            'totalStarShips' => $totalStarShips,
            'myship' => $myship
        ]);
    }
}
