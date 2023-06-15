<?php

namespace Maris\SymfonyBundle\PersonBundle\Entity;

use Doctrine\Common\Collections\Collection;

/**
 * Организация Для возможности регистрировать корпоративный аккаунт
 */
class Company
{
    /**
     * Идентификатор
     * @var int|null
     */
    private ?int $id = null;

    /**
     * Аккаунт организации
     * @var Account|null
     */
    private ?Account $account = null;
    /**
     * Правовая форма
     * @var string
     */
    private string $legalForm;

    /**
     * Название организации
     * @var string
     */
    private string $name;

    /**
     * ИНН Организации
     * @var string
     */
    private string $inn;

    /**
     * КПП Организации
     * @var string|null
     */
    private ?string $kpp = null;

    /**
     * ОГРН Организации
     * @var string
     */
    private string $ogrn;

    /**
     * Юридический адрес Организации
     * @var string
     */
    private string $address;

    /**
     * Генеральный директор
     * @var Person
     */
    private Person $management;

    /**
     * Список пользователей которые од
     * своего имени могут заходить на аккаунт компании.
     * @var Collection<Account>
     */
    private Collection $trustedPersons;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Account|null
     */
    public function getAccount(): ?Account
    {
        return $this->account;
    }

    /**
     * @param Account|null $account
     * @return $this
     */
    public function setAccount(?Account $account): self
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return string
     */
    public function getLegalForm(): string
    {
        return $this->legalForm;
    }

    /**
     * @param string $legalForm
     * @return $this
     */
    public function setLegalForm(string $legalForm): self
    {
        $this->legalForm = $legalForm;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getInn(): string
    {
        return $this->inn;
    }

    /**
     * @param string $inn
     * @return $this
     */
    public function setInn(string $inn): self
    {
        $this->inn = $inn;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    /**
     * @param string|null $kpp
     * @return $this
     */
    public function setKpp(?string $kpp): self
    {
        $this->kpp = $kpp;
        return $this;
    }

    /**
     * @return string
     */
    public function getOgrn(): string
    {
        return $this->ogrn;
    }

    /**
     * @param string $ogrn
     * @return $this
     */
    public function setOgrn(string $ogrn): self
    {
        $this->ogrn = $ogrn;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return $this
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return Person
     */
    public function getManagement(): Person
    {
        return $this->management;
    }

    /**
     * @param Person $management
     * @return $this
     */
    public function setManagement(Person $management): self
    {
        $this->management = $management;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getTrustedPersons(): Collection
    {
        return $this->trustedPersons;
    }

    /**
     * @param Collection $trustedPersons
     * @return $this
     */
    public function setTrustedPersons(Collection $trustedPersons): self
    {
        $this->trustedPersons = $trustedPersons;
        return $this;
    }


}