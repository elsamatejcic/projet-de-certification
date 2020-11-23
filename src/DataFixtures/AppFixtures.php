<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

use App\Entity\Tag;
use App\Entity\Course;
use App\Entity\Category;
use App\Entity\User;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        $user = new User();
        $user->setEmail('tata@gmail.com');
        $user->setPassword('tatatata');
        $manager->persist($user);

        // Ajout des caterories
        $cat = new Category();
        $cat->setTitre('Algorithmique');
        $manager->persist($cat);

        $cat = new Category();
        $cat->setTitre('Conception application mobile');
        $manager->persist($cat);

        $cat = new Category();
        $cat->setTitre('Developpement WEB');
        $manager->persist($cat);

        // Ajout des tags
        for ($i = 0; $i < 10; ++$i) {

            $tag = new Tag();
            $tag->setName($faker->name);
            
            // Ajout des cours
            for ($k = 0; $k < 10; ++$k) {
                $course = new Course();
                $course->setTitre($faker->name);
                $course->setDescription($faker->text);
                $course->setDateDePublication(new \DateTime);
                $course->setLienVideo('https://www.youtube.com/watch?v=SMgQlTSoXf0&list=PLjwdMgw5TTLWom67YfZuha-1iYzIirwJR&ab_channel=Grafikart.fr');
                $course->addTag($tag);
                $course->setCategory($cat);
                $course->setUser($user);
                
                $manager->persist($course);

                $tag->addCourse($course);
            }

            $manager->persist($tag);
        }

        $manager->flush();
    }
}