<?php

namespace App\Controller;

use App\Repository\ObjekteRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="app_app")
     */
    public function index(ObjekteRepository $repo): JsonResponse
    {

        $objekt = $repo->query();
        return $this->json($objekt, 200, [], ['groups' => 'objekte']);
    }
}
