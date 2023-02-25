<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;



class MovieController extends AbstractController
{
    #[Route('/movie', name: 'app_movie')]
    // public function index(MovieRepository $movieRepository): Response
    // {
    //  $movies = $movieRepository->findAll();
    //  return $this->render('index.html.twig', ['movies'=>$movies]);
    // }


    public function index(EntityManagerInterface  $em): Response
    {
     
        $repository = $em->getRepository(Movie::class);

        $movies = $repository->findAll();
        

     return $this->render('index.html.twig', ['movies'=>$movies]);
    }
}
