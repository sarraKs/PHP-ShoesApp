<?php

namespace App\Controller;

use App\Entity\Chaussure;
use App\Entity\Member;
use App\Entity\Exposition;
use App\Form\ExpositionType;
use App\Repository\ExpositionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/exposition')]
class ExpositionController extends AbstractController
{
    #[Route('/', name: 'app_exposition_index', methods: ['GET'])]
    public function index(ExpositionRepository $expositionRepository): Response
    {
        $privateexpositions = array();
        $user = $this->getUser();
        if($user) {
            $member = $user->getMember();
            $privateexpositions = $expositionRepository->findBy(
                [
                    'publiee' => false,
                    'membre' => $member
                ]);
        }
        
        return $this->render('exposition/index.html.twig', [
            'expositions' => $expositionRepository->findBy(['publiee' => true]),
            
            'privateexpositions' => $privateexpositions,
        ]);
    }

    #[Route('/new/{id}', name: 'app_exposition_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, Member $member): Response
    {
                
        $exposition = new Exposition();
        $exposition->setMembre($member);
        $form = $this->createForm(ExpositionType::class, $exposition);
        $form->handleRequest($request);
        
        $hasAccess = $this->getUser()->getMember() == $exposition->getMembre();
        if(! $hasAccess) {
            throw $this->createAccessDeniedException("Vous ne pouvez pas créer une exposition depuis ce profil!");
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($exposition);
            $entityManager->flush();
            
            //ajouter exposition_show pour un membre
            return $this->redirectToRoute('app_exposition_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('exposition/new.html.twig', [
            'member' => $member,
            'exposition' => $exposition,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_exposition_show', methods: ['GET'])]
    public function show(Exposition $exposition): Response
    {
        $hasAccess = false;
        if($this->isGranted('ROLE_ADMIN') || $exposition->isPubliee()) {
            $hasAccess = true;
        }
        else {
            $user = $this->getUser();
            if( $user ) {
                $member = $user->getMember();
                if ( $member &&  ($member == $exposition->getMembre()) ) {
                    $hasAccess = true;
                }
            }
        }
        if(! $hasAccess) {
            throw $this->createAccessDeniedException("Vous ne pouvez pas acceder à cette ressource!");
        }
        return $this->render('exposition/show.html.twig', [
            'exposition' => $exposition,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_exposition_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function edit(Request $request, Exposition $exposition, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ExpositionType::class, $exposition);
        $form->handleRequest($request);

        $hasAccess = $this->getUser()->getMember() == $exposition->getMembre();
        if(! $hasAccess) {
            throw $this->createAccessDeniedException("Vous ne pouvez pas modifier cette exposition!");
        }
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_exposition_index', [], Response::HTTP_SEE_OTHER);
        }
        

        return $this->render('exposition/edit.html.twig', [
            'exposition' => $exposition,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_exposition_delete', methods: ['POST'])]
    public function delete(Request $request, Exposition $exposition, EntityManagerInterface $entityManager): Response
    {
        
        $hasAccess = $this->getUser()->getMember() == $exposition->getMembre();
        if(! $hasAccess) {
            throw $this->createAccessDeniedException("Vous ne pouvez pas supprimer cette exposition!");
        }
        
        if ($this->isCsrfTokenValid('delete'.$exposition->getId(), $request->request->get('_token'))) {
            $entityManager->remove($exposition);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_exposition_index', [], Response::HTTP_SEE_OTHER);
    }
    
    /**
     * @Route("/{exposition_id}/chaussure/{chaussure_id}", name="app_exposition_chaussure_show", methods={"GET"})
     * @ParamConverter("exposition", options={"id" = "exposition_id"})
     * @ParamConverter("chaussure", options={"id" = "chaussure_id"})
     */
    //le lien vers une chaussure depuis exposition ne marche pas
    
    #[Route("/{exposition_id}/chaussure/{chaussure_id}", name: "app_exposition_chaussure_show", methods: ["GET"])]
    public function chaussureShow(Exposition $exposition, Chaussure $chaussure): Response
    {
        if(! $exposition->getChaussures()->contains($chaussure)) {
            throw $this->createNotFoundException("J'ai pas trouvé cette chaussure dans l'exposition!");
        }
        /*
        if(! $exposition->isPublished()) {
            throw $this->createAccessDeniedException("Vous n'avez pas l'accès à cette ressource!");
        }
        */
        
        $hasAccess = false;
        if($this->isGranted('ROLE_ADMIN') || $exposition->isPubliee()) {
            $hasAccess = true;
        }
        else {
            $user = $this->getUser();
            if( $user ) {
                $member = $user->getMember();
                if ( $member &&  ($member == $exposition->getMembre()) ) {
                    $hasAccess = true;
                }
            }
        }
        if(! $hasAccess) {
            throw $this->createAccessDeniedException("You cannot access the requested ressource!");
        }
        
        return $this->render('chaussure/show.html.twig', [
            'chaussure' => $chaussure,
            'exposition' => $exposition,
            
        ]);
    }
}
