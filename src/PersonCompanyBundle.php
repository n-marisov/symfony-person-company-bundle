<?php

namespace Maris\SymfonyBundle\PersonBundle;

use Maris\SymfonyBundle\PersonBundle\DependencyInjection\PersonCompanyExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class PersonCompanyBundle extends AbstractBundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        dd(new PersonCompanyExtension());
        #return new PersonCompanyExtension();
    }

}