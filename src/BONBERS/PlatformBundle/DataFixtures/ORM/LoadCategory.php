<?php

namespace BONBERS\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
Use BONBERS\PlatformBundle\Entity\Category;

class LoadCategory implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'entityManager
    public function load(ObjectManager $manager)
    {
        // Liste des noms de catégorie à ajouter
        $names = array(
            'Développement Web',
            'Développement Mobile',
            'Graphisme',
            'Intégration',
            'Réseau',
            'Symfony 3',
            'PHP',
            'HTML / CSS',
            'Javascript'
        );
        
        foreach ($names as $name) {
            // On crée la catégorie
            $category = new Category();
            $category->setName($name);
            
            // On persiste
            $manager->persist($category);
        }
        
        // On déclenche l'enregistrement de toutes les catégories
        $manager->flush();
    }
}
