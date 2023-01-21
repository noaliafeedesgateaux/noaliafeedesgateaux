<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Location;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $hasher
    )
    {

    }
    public function load(ObjectManager $manager): void
    {
        $admin = new User;
        $admin->setRoles(['ROLE_ADMIN'])
                ->setStatus('administrator')
                ->setEmail('exemple@email.fr')
                ->setFacebook('https://www.facebook.com/')
                ->setPhone('07 53 31 15 18')
                ->setLocation(
                    (new Location)->setCity('Cannes')
                                    ->setPostcode('06400')
                                    ->setX('1023559.08')
                                    ->setY('6281139.85')
                )
                ->setPassword($this->hasher->hashPassword($admin, 'password'))
                ;
        $manager->persist($admin);

        $me = new User;
        $me->setRoles(['ROLE_ADMIN'])
                ->setStatus('dev')
                ->setEmail('arotcarena.ib@gmail.com')
                ->setFacebook('facebook')
                ->setPhone('06 00 00 00 00')
                ->setLocation(
                    (new Location)->setCity('Ville')
                                    ->setPostcode('01000')
                                    ->setX('1')
                                    ->setY('1')
                )
                ->setPassword($this->hasher->hashPassword($me, 'password'))
                ;
        $manager->persist($me);

        $manager->flush();
    }
}
