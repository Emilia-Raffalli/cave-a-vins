<?php

namespace App\Controller;

use App\Entity\Bottle;
use App\Form\BottleType;
use App\Repository\BottleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BottleController extends AbstractController
{
    #[Route('/bouteilles', name: 'app_bottle')]
    public function index(BottleRepository $bottleRepository): Response
    {
        return $this->render('bottle/index.html.twig', [
            'bottles' => $bottleRepository->findAll(),
        ]);
    }
    
    #[Route('/bouteilles/{id<^\d+$>}', name: 'app_bottle_show')]
    public function show(Bottle $bottle) : Response
    {
        return $this->render('bottle/show.html.twig', [
            'bottle' => $bottle
        ]);
    } 

    #[Route('/bouteilles/new', name: 'app_bottle_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(BottleType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {
            $em->persist($form->getData());
            $em->flush();

            return $this->redirectToRoute('app_bottle');
        }

        return $this->render('/bottle/new.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('bouteilles/edit/{id<^\d+$>}', name:'app_bottle_edit')]
    public function edit(Bottle $bottle, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(BottleType::class, $bottle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('app_bottle');

        }

        return $this->render('/bottle/edit.html.twig', [
            'bottle' => $bottle,
            'form' => $form
        ]);

    }
    
    // #[Route('bouteilles/{id<^\d+$>}', name:'app_bottle_delete')]
    // function delete(Bottle $bottle, EntityManagerInterface $em, BottleRepository $bottleRepository)
    // {
    //     $em->remove($bottle);
    //     $em->flush();
    
    //     return $this->redirectToRoute('app_bottle');
    // }


}








