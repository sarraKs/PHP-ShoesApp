<?php

namespace App\Controller\Admin;

use App\Entity\Exposition;
use Doctrine\DBAL\Query\QueryBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class ExpositionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Exposition::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
        /*
            IdField::new('id'),
            TextField::new('titre'),
            BooleanField::new('publiee'),
            AssociationField::new('membre'),
            AssociationField::new('chaussures')
         */
            IdField::new('id')->hideOnForm(),
            AssociationField::new('membre'),
            BooleanField::new('publiee')
            ->onlyOnForms()
            ->hideWhenCreating(),
            TextField::new('titre'),
            
            AssociationField::new('chaussures')
            ->onlyOnForms()
            ->hideWhenCreating()
            ->setTemplatePath('admin/fields/placard_chaussures.html.twig')
            ->setQueryBuilder(
                function (QueryBuilder $queryBuilder) {
                    // récupération de l'instance courante de [galerie]
                    $currentExposition = $this->getContext()->getEntity()->getInstance();
                    $membre = $currentExposition->getmembre();
                    $memberId = $membre->getId();
                    // charge les seuls [objets] dont le 'owner' de l'[inventaire] est le [createur] de la galerie
                    $queryBuilder->leftJoin('entity.placard', 'i')
                    ->leftJoin('i.owner', 'm')
                    ->andWhere('m.id = :member_id')
                    ->setParameter('member_id', $memberId);
                    return $queryBuilder;
                }
                ),
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
        ->setEntityLabelInSingular('Exposition')
        ->setEntityLabelInPlural('Expositions')
        
        
        //pour que seulement les editeurs voient les placards
        //->setEntityPermission('ROLE_EDITOR')
        
        //pour que seulement les admins voient les placards
        //->setEntityPermission('ROLE_ADMIN')
        
        ->setPageTitle('index', 'Toutes les %entity_label_plural%')
        ->setPageTitle('detail', fn (Exposition $exposition) => (string) $exposition)
        ->setPageTitle('edit', fn (Exposition $exposition) => (string) $exposition)
        ;
    }
    
}
