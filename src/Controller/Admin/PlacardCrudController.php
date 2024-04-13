<?php

namespace App\Controller\Admin;

use App\Entity\Placard;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\QueryBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class PlacardCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Placard::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('NomPlacard'),
            TextField::new('RefPlacard'),
            AssociationField::new('member'),
            AssociationField::new('chaussures')
            ->onlyOnDetail()
            ->setTemplatePath('admin/fields/placard_chaussures.html.twig'
           )
        ];
    }
    
    
    public function configureActions(Actions $actions): Actions
    { 
        return $actions
        ->add(Crud::PAGE_INDEX, Action::DETAIL)
        ;
    }
    
    public function configureCrud(Crud $crud): Crud
    {
        // Customize the rendering of the row to grey-out the completed Todos
        return $crud
        ->setEntityLabelInSingular('Placard')
        ->setEntityLabelInPlural('Placards')
        
        
        //pour que seulement les editeurs voient les placards
        //->setEntityPermission('ROLE_EDITOR')
        
        //pour que seulement les admins voient les placards
        //->setEntityPermission('ROLE_ADMIN')
        
        ->setPageTitle('index', 'Liste des %entity_label_plural%')
        ->setPageTitle('detail', fn (Placard $placard) => (string) $placard)
        ->setPageTitle('edit', fn (Placard $placard) => (string) $placard)
        ;
    }
    
}
