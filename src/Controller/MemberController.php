<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MemberRepository;
use App\Entity\Member;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/member')]
#[IsGranted('IS_AUTHENTICATED_FULLY')]
class MemberController extends AbstractController
{
    #[Route('/', name: 'app_member_index', methods: ['GET'])]
    public function index(MemberRepository $memberRepository): Response
    {
        
        if ($this->isGranted('ROLE_ADMIN')) {
            $members = $memberRepository->findAll();
        }
        else {
            $member = $this->getUser()->getMember();
            $members = array();
            $members[0] = $member;
        }
        
        return $this->render('member/index.html.twig', [
            'members' => $members,
        ]);
    }
    
    #[Route('/{id}', name: 'app_member_show', methods: ['GET'])]
    public function show(Member $member): Response
    {
        return $this->render('member/show.html.twig', [
            'member' => $member,
        ]);
    }
}
