<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $hasher;
        public function __construct(UserPasswordHasherInterface $hasher){
            $this->hasher = $hasher;
        }

    public function load(ObjectManager $manager): void
    {
        $testUser = new User();
        $testUser->setFirstname('user');
        $testUser->setLastname('user');
        $testUser->setEmail('user@user.fr');
        $encodedPassword = $this->hasher->hashPassword($testUser, 'user');
        $testUser->setPassword($encodedPassword);
        $testUser->setRoles(['ROLE_USER']);

        $testAdmin = new User();
        $testAdmin->setFirstname('admin');
        $testAdmin->setLastname('admin');
        $testAdmin->setEmail('admin@admin.fr');
        $encodedPassword = $this->hasher->hashPassword($testAdmin, 'admin');
        $testAdmin->setPassword($encodedPassword);
        $testAdmin->setRoles(['ROLE_ADMIN']);

        $manager->persist($testUser);
        $manager->persist($testAdmin);
        $manager->flush();
    }
}
