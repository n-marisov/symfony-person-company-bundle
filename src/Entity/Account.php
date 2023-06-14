<?php

namespace Maris\SymfonyBundle\PersonBundle\Entity;


use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class Account implements UserInterface,PasswordAuthenticatedUserInterface
{
    private ?int $id = null;

    /**
     * Список ролей пользователя
     * @var array<int,string>
     */
    private array $roles = ["ROLE_USER"];

    /**
     * @var string|null Хэшированный пароль
     */
    private ?string $password = null;
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function eraseCredentials()
    {

    }

    public function getUserIdentifier(): string
    {
        return "";
    }
}