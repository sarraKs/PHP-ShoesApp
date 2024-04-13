<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\PlacardType;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Placard;
use App\Repository\PlacardRepository;
use Symfony\Component\Security\Http\Attribute\IsGranted;



class PlacardController extends AbstractController
{
    #[Route('/MyShoes', name: 'app_placard')]
    
    public function index(): Response
    {
        return $this->render('placard/index.html.twig', [
            'welcome' => 'Bienvenue dans MyShoes!',
        ]);
    }
    
    
    /**
     * Lists all Placard entities.
     */
    
    #[Route('/placard/list', name: 'Placard_list', methods: ['GET'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function listAction(PlacardRepository $placardRepository)
    {
               
        
        if ($this->isGranted('ROLE_ADMIN')) {
            $placards = $placardRepository->findAll();
        }
        else {
            $member = $this->getUser()->getMember();
            //$placards = $placardRepository->findMemberPlacards($member);
            $placards = array();
            $placards[0] = $member->getPlacard();
        }
 
        return $this->render('placard/list.html.twig',
            [ 'placards' => $placards ]
            );
    }
    
    
    #[Route('/placard/{id}/edit', name: 'app_placard_edit', methods: ['GET', 'POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function edit(Request $request, Placard $placard, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PlacardType::class, $placard);
        $form->handleRequest($request);
        
        $hasAccess = $this->getUser()->getMember() == $placard->getMember();
        if(! $hasAccess) {
            throw $this->createAccessDeniedException("Vous ne pouvez pas modifier ce placard!");
        }
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            
            return $this->redirectToRoute('Placard_list', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->render('placard/edit.html.twig', [
            'placard' => $placard,
            'form' => $form,
        ]);
    }
    
    
    /**
    * Finds and displays a placard entity.
    */
    #[Route('/placard/{id}', name: 'placard_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function showAction(ManagerRegistry $doctrine, $id): Response
    {
                
        $PlacardRepo = $doctrine->getRepository(Placard::class);
        $placard = $PlacardRepo->find($id);
        
        $hasAccess = $this->isGranted('ROLE_ADMIN') ||
        ($this->getUser()->getMember() == $placard->getMember());
        if(! $hasAccess) {
            throw $this->createAccessDeniedException("Vous ne pouvez pas acceder au placard d'un autre membre!");
        }
        if (!$placard) {
            throw $this->createNotFoundException("Le Placard n'existe pas");
        }
        
        return $this->render('placard/show.html.twig',
            [ 'placard' => $placard ]
            );
    }
    
}
