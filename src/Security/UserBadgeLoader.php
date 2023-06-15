<?php

namespace Maris\SymfonyBundle\PersonBundle\Security;

use Maris\SymfonyBundle\PersonBundle\Entity\Account;
use Maris\SymfonyBundle\PersonBundle\Repository\PersonRepository;
use Maris\SymfonyBundle\PersonBundle\Repository\AccountRepository;
use libphonenumber\NumberParseException;
use libphonenumber\PhoneNumberUtil;

class UserBadgeLoader
{
    private PersonRepository $personRepository;

    private AccountRepository $userRepository;

    private PhoneNumberUtil $phoneNumberUtil;

    /**
     * @param PersonRepository $personRepository
     * @param AccountRepository $userRepository
     */
    public function __construct(PersonRepository $personRepository, AccountRepository $userRepository)
    {
        $this->personRepository = $personRepository;
        $this->userRepository = $userRepository;
        $this->phoneNumberUtil = PhoneNumberUtil::getInstance();
    }

    public function __invoke( string $userIdentifier ):?Account
    {
        try {
            $phone = $this->phoneNumberUtil->parse($userIdentifier, "RU");
        } catch (NumberParseException $e) {
            return null;
        }
        $person = $this->personRepository->findOneBy(["phone"=>$phone]);
        return $this->userRepository->findOneBy([
            "person" =>$person
        ]);
    }


}