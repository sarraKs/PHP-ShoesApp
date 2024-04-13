<?php

namespace App\Controller\Admin;

use App\Entity\Chaussure;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
//use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class ChaussureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Chaussure::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            TextField::new('TitreChaussure'),
            TextField::new('Categorie'),
            TextField::new('Marque'),
            TextField::new('Couleur'),
            AssociationField::new('placard'),
            
            //AssociationField::new('placard')->setCrudController(PlacardCrudController::class),
        ];
    }
    
    public function configureCrud(Crud $crud): Crud
    {
        // Customize the rendering of the row to grey-out the completed Todos
        return $crud
        ->setEntityLabelInSingular('Chaussure')
        ->setEntityLabelInPlural('Chaussures')
        
        
        //seulement les editeurs peuvent voir les chaussures
        //->setEntityPermission('ROLE_EDITOR')
        
        //seulement les admin peuvent voir les chaussures
        //->setEntityPermission('ROLE_ADMIN')
        
        ->setPageTitle('index', 'Toutes les %entity_label_plural%')
        ->setPageTitle('detail', fn (Chaussure $chaussure) => (string) $chaussure)
        ->setPageTitle('edit', fn (Chaussure $chaussure) => (string) $chaussure)
        ;
    }
    
}
