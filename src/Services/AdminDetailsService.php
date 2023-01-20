<?php
namespace App\Services;

use App\Entity\Location;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Twig\Runtime\LocationExtensionRuntime;

class AdminDetailsService
{
    private User $administrator;

    public function __construct(
        private UserRepository $userRepository,
        private LocationExtensionRuntime $locationFormater
    )
    {
        $this->administrator = $this->userRepository->findAdministrator();
    }
    public function getEmailStart():string 
    {
        return explode('@', $this->administrator->getEmail())[0];
    }
    public function getEmailEnd():string 
    {
        return explode('@', $this->administrator->getEmail())[1];
    }
    public function getEmail():string
    {
        return $this->administrator->getEmail();
    }
    public function getPhone():string 
    {
        return $this->administrator->getPhone();
    }
    public function getLocation():?Location 
    {
        return $this->administrator->getLocation();
    }
    public function getFacebook():string 
    {
        return $this->administrator->getFacebook();
    }
}