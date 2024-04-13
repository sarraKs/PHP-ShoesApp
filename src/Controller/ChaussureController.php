<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Chaussure;
use App\Entity\Placard;
use App\Form\ChaussureType;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('IS_AUTHENTICATED_FULLY')]
class ChaussureController extends AbstractController
{
    /*
    #[Route('/chaussure', name: 'app_chaussure')]
    public function index(): Response
    {
        return $this->render('chaussure/index.html.twig', [
            'controller_name' => 'ChaussureController',
        ]);
    }
    */
    
    
    #[Route('/chaussure/new/{id}', name: 'app_chaussure_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, Placard $placard): Response
    {
        $chaussure = new Chaussure();
        $chaussure->setPlacard($placard);
        $form = $this->createForm(ChaussureType::class, $chaussure);
        $form->handleRequest($request);
        
        $hasAccess = $this->getUser()->getMember() == $placard->getMember();
        if(! $hasAccess) {
            throw $this->createAccessDeniedException("Vous ne pouvez pas créer une chaussure depuis ce profil!");
        }
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($chaussure);
            $entityManager->flush();
            
            return $this->redirectToRoute('placard_show', ['id' => $placard->getId()], Response::HTTP_SEE_OTHER);
        }
        
        
        return $this->render('chaussure/new.html.twig', [
            'placard'=> $placard,
            'chaussure' => $chaussure,
            'form' => $form,
        ]);
    }
    /**
     * Finds and displays a chaussure entity.
     */
    #[Route('/chaussure/{id}', name: 'chaussure_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function showAction(ManagerRegistry $doctrine, $id): Response
    {
        $chaussureRepo = $doctrine->getRepository(Chaussure::class);
        $chaussure = $chaussureRepo->find($id);
        
        $hasAccess = $this->isGranted('ROLE_ADMIN') ||
        ($this->getUser()->getMember() == $chaussure->getPlacard()->getMember());
        if(! $hasAccess) {
            throw $this->createAccessDeniedException("Vous ne pouvez pas acceder à la chaussure d'un autre membre !");
        }
        
        if (!$chaussure) {
            throw $this->createNotFoundException("La chaussure n'existe pas");
        }
        
        return $this->render('chaussure/show.html.twig',
            [ 'chaussure' => $chaussure ]
            );
    }
    
    
    
    
    #[Route('/chaussure/{id}/edit', name: 'app_chaussure_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Chaussure $chaussure, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ChaussureType::class, $chaussure);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            
            return $this->redirectToRoute('Placard_list', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->render('chaussure/edit.html.twig', [
            'chaussure' => $chaussure,
            'form' => $form,
        ]);
    }
    
    #[Route('/chaussure/{id}', name: 'app_chaussure_delete', methods: ['POST'])]
    public function delete(Request $request, Chaussure $chaussure, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chaussure->getId(), $request->request->get('_token'))) {
            $entityManager->remove($chaussure);
            $entityManager->flush();
        }
        
        return $this->redirectToRoute('app_chaussure_index', [], Response::HTTP_SEE_OTHER);
    }
    
}
