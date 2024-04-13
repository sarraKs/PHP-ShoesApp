<?php

namespace App\Controller\Admin;

use App\Entity\Member;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class MemberCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Member::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('Nom'),
            AssociationField::new('placard'),
        ];
    }
    
    public function configureCrud(Crud $crud): Crud
    {
        // Customize the rendering of the row to grey-out the completed Todos
        return $crud
        ->setEntityLabelInSingular('Membre')
        ->setEntityLabelInPlural('Membres')
        
        
        //seulement les editeurs peuvent voir les placards
        //->setEntityPermission('ROLE_EDITOR')
        
        //seulement les admin peuvent voir les placards
        //->setEntityPermission('ROLE_ADMIN')
        
        ->setPageTitle('index', 'Liste des membres')
        ->setPageTitle('detail', fn (Member $member) => (string) $member)
        ->setPageTitle('edit', fn (Member $member) => (string) $member)
        ;
    }
    
}
