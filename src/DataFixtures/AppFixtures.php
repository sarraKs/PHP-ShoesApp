<?php

namespace App\DataFixtures;

use App\Entity\Chaussure;
use App\Entity\Placard;
use App\Entity\Member;
use App\Entity\Exposition;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class AppFixtures extends Fixture implements DependentFixtureInterface
{
    private const SARRA_PLACARD_1 = 'sarra-inventory-1';
    private const ASMA_PLACARD_1 = 'asma-inventory-1';

    
    
    /**
     * Generates initialization data for membre and associated placard : [Nom, NomPlacard, RefPlacard]
     * @return \\Generator
     */
    //Quand on crée un membre, on doit obligatoirement créer le placard au même temps
    //chaque membre possède obligatoirement un et un seul placard
    private static function membresDataGenerator()
    {
        yield ["Asma Fox", "Mes chaussures <3", self::ASMA_PLACARD_1, 'asma@localhost'];
        yield ["Sarra Ksontini", "Placard de Sarra", self::SARRA_PLACARD_1, 'sarra@localhost'];
        
    }

    /**
     * Generates initialization data for chaussures : [categorie, marque, couleur, RefPlacard]
     * @return \\Generator
     */
    private static function chaussuresDataGenerator()
    {
        yield ["Sport noirs", "Baskets", "Adidas", "Noir", self::SARRA_PLACARD_1];
        yield ["Bottes soirée" , "Bottes", "Chantal", "Blanc", self::SARRA_PLACARD_1];
        yield ["Bottes cool", "Bottes", "Geox", "Noir", self::SARRA_PLACARD_1];
        yield ["Sandales sortie", "Sandales", "Carmela", "Beige", self::ASMA_PLACARD_1];
        yield ["Tongues préferées", "Tongues", "Adidas", "Gris", self::SARRA_PLACARD_1];
        yield ["Baskets Fit", "Baskets", "Nike", "Rose", self::SARRA_PLACARD_1];
        yield ["LA Paire Geox", "Baskets", "Geox", "Rose", self::ASMA_PLACARD_1];
        yield ["Sandales blanches", "Sandales", "Carmela", "Blanc", self::ASMA_PLACARD_1];
    }
    
    /**
     * Generates initialization data for expositions : [titre, publiee, membre, [chaussure1,chaussure2,..]]
     * @return \\Generator
     */
    private static function expositionsDataGenerator()
    {
        yield ["Fitness&Style", True ,"Sarra Ksontini", ["Baskets Fit","Sport noirs"]];
        yield ["Summer vibes", False ,"Asma Fox", ["Sandales blanches","Sandales sortie", "LA Paire Geox" ]];
        yield ["Best comfort shoes", True ,"Sarra Ksontini", ["Tongues préferées"]];
    }
    
    
   
    public function load(ObjectManager $manager)
    {
        
        $placardRepo = $manager->getRepository(Placard::class);
                
        foreach (self::membresDataGenerator() as [$Nom, $NomPlacard, $RefPlacard, $useremail] ) {
            $placard = new placard();
            $placard->setNomPlacard($NomPlacard);
            $placard->setRefPlacard($RefPlacard);
            $manager->persist($placard);
            $manager->flush();
            
            $member = new member();
            if ($useremail) {
                $user = $manager->getRepository(User::class)->findOneByEmail($useremail);
                $member->setUser($user);
            }
            $member->setNom($Nom);
            $member->setPlacard($placard);
            $manager->persist($member);
            $manager->flush();
        }
        
        foreach (self::chaussuresDataGenerator() as [$titrechaussure, $categorie, $marque, $couleur, $RefPlacard] ) {
            $placard = $placardRepo->findOneBy(['RefPlacard' => $RefPlacard]);
            
            $chaussure = new chaussure();
            $chaussure->setTitreChaussure($titrechaussure);
            $chaussure->setCategorie($categorie);
            $chaussure->setMarque($marque);
            $chaussure->setCouleur($couleur);
            $placard->addChaussure($chaussure);
            
            $manager->persist($placard);
        }
        $manager->flush();
        
        $membreRepo = $manager->getRepository(Member::class);
        $chaussureRepo = $manager->getRepository(Chaussure::class);
        foreach (self::expositionsDataGenerator() as [$titre, $publiee, $membre, $listeTitres] ) {
            $membre = $membreRepo->findOneBy(['Nom' => $membre]);
            
            $exposition = new Exposition();
            $exposition->setTitre($titre);
            $exposition->setPubliee($publiee);
            $exposition->setMembre($membre);
            foreach($listeTitres as $titrechaussure){
                $chaussure = $chaussureRepo->findOneBy(['TitreChaussure' => $titrechaussure]);
                $exposition->addChaussure($chaussure);
            }
                
            $manager->persist($exposition);
        }
        $manager->flush();
        
    }
    public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
    }
}

