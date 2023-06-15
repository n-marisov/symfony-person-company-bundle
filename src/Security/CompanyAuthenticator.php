<?php

namespace Maris\SymfonyBundle\PersonBundle\Security;

use Maris\SymfonyBundle\PersonBundle\Entity\Account;
use Maris\SymfonyBundle\PersonBundle\Repository\AccountRepository;
use Maris\SymfonyBundle\PersonBundle\Repository\CompanyRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class CompanyAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    private AccountRepository $accountRepository;

    private CompanyRepository $companyRepository;

    /**
     * @param AccountRepository $accountRepository
     * @param CompanyRepository $companyRepository
     */
    public function __construct(AccountRepository $accountRepository, CompanyRepository $companyRepository)
    {
        $this->accountRepository = $accountRepository;
        $this->companyRepository = $companyRepository;
    }


    protected function getLoginUrl(Request $request): string
    {
        return $request->getUri();
    }

    public function authenticate(Request $request): Passport
    {
        $inn = $request->request->get("inn","");
        $request->getSession()->set(Security::LAST_USERNAME, $inn);

        $badge = new UserBadge( $inn, function ( string $userIdentifier ):?Account{
            $company = $this->companyRepository->findOneBy([
                "inn"=> trim($userIdentifier)
            ]);
            return $company?->getAccount() ?? null;
        });

        return new SelfValidatingPassport($badge);
        //return new Passport($badge);
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        // Перенаправляем на страницу с которой пришёл
        return null;
    }



}