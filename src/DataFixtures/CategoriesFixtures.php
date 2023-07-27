<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategoriesFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categories = [
            'Problème de connexion',
            'Problème d\'affichage',
            'Problème de son',
            'Problème de matériel',
            'Problème de logiciel',
            'Problème de réseau',
            'Problème de sécurité',
            'Problème de messagerie',
            'Problème de mot de passe',
            'Problème de compte',
            'Problème de sauvegarde',
            'Problème de stockage',
            'Problème de performance',
            'Problème de virus',
        ];
        foreach ($categories as $key => $category) {
            $categoryObject = new Category();
            $categoryObject->setLabel($category);
            $manager->persist($categoryObject);
            //$this->addReference('category_' . $key, $categoryObject);
        }

        $manager->flush();
    }
}
