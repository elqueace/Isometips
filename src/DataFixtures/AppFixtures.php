<?php

namespace App\DataFixtures;
use App\Entity\Article;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class AppFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {

            //////////////////////////////////////ARTICLE/////////////////////////////////////
            $article = new Article();
            $article->setName("Ludovic");
            $article->setUrl("Ludovic");
            $article->setSource("Le Curieux");
            $article->setTopics("Ludovic");
            $article->setDateFirstSeen("Ludovic");
            $article->setDateLastSeen("Ludovic");
            $article->setShowInterval("Ludovic");
            $article->setArticleScore("Ludovic");

            $manager->persist($article);
            $manager->flush();


    }

}
