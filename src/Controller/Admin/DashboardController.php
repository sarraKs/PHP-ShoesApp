<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use App\Entity\Exposition;
use App\Entity\Placard;
use App\Entity\Chaussure;
use App\Entity\Member;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    
    public function index(): Response
    {
        //option1: redirect all users to dashboard (index page)
        //return parent::index();        
        
        //option2: redirect all users to Placard CRUD controller
        $routeBuilder = $this->container->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(PlacardCrudController::class)->generateUrl();
        return $this->redirect($url);
        
        
        /*
        //redirect all users to Chaussure CRUD Controller
        $routeBuilder = $this->container->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(ChaussureCrudController::class)->generateUrl();
        return $this->redirect($url);
        */
        
        
        
        /*
        //option3: 
        //if we are admin or editor, we can see 'Placards' in the menu and redirect to PlacardCrudController:
        $routeBuilder = $this->container->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(PlacardCrudController::class)->generateUrl();
        return $this->redirect($url);
        //if we are member, we can see 'Placard' in the menu and redirect to the page with chaussures in Placard (chaussures crudController?)
        //else, we can only see expositions, no placards (une page d'accueil avec expositions et bouton login)
        */
        
        
        // Option 2. the dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Myshoes');
        
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Accueil', 'fa fa-home');
    
        yield MenuItem::linkToCrud('Placards', 'fas fa-list', Placard::class);
        yield MenuItem::linkToCrud('Chaussures', 'fas fa-list', Chaussure::class);
        yield MenuItem::linkToCrud('Membres', 'fas fa-list', Member::class);
        yield MenuItem::linkToCrud('Expositions', 'fas fa-list', Exposition::class);
        yield MenuItem::section('A Propos');
    }
}
