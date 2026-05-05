<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
// 1. Correct the Use Statement
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class StarshipController extends AbstractController
{
    // 2. Remove trailing space in 'app_starship_show'
    #[Route("/starships/{id<\d+>}", name: "app_starship_show")]
    public function show(int $id, StarshipRepository $repository): Response
    {
        $starship = $repository->find($id);
        if (!$starship) {
            throw $this->createNotFoundException("Starship not found");
        }
        return $this->render('starship/starship.html.twig', [
            'starship' => $starship
        ]);
    }
}
