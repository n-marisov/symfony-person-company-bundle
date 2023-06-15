<?php

namespace Maris\SymfonyBundle\PersonBundle\Entity;

use DateTimeImmutable;
use libphonenumber\PhoneNumber;
use Maris\SymfonyBundle\PersonBundle\Gender;

class Person
{
    private ?int $id = null;

    /***
     * Аккаунт пользователя
     * @var Account|null
     */
    private ?Account $account = null;

    /**
     * Номер телефона
     * @var PhoneNumber
     */
    private PhoneNumber $phone;

    /**
     * Фамилия
     * @var string
     */
    private string $surname;

    /**
     * Имя
     * @var string
     */
    private string $lastname;

    /**
     * Отчество
     * @var string
     */
    private string $patronymic;

    /**
     * Дата рождения
     * @var DateTimeImmutable|null
     */
    private ?DateTimeImmutable $birthdate = null;

    /**
     * Пол true -> man false -> girl
     * @var Gender
     */
    private Gender $gender = Gender::UNKNOWN;

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
     * @return PhoneNumber
     */
    public function getPhone(): PhoneNumber
    {
        return $this->phone;
    }

    /**
     * @param PhoneNumber $phone
     * @return $this
     */
    public function setPhone(PhoneNumber $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     * @return $this
     */
    public function setSurname(string $surname): self
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return $this
     */
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getPatronymic(): string
    {
        return $this->patronymic;
    }

    /**
     * @param string $patronymic
     * @return $this
     */
    public function setPatronymic(string $patronymic): self
    {
        $this->patronymic = $patronymic;
        return $this;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getBirthdate(): ?DateTimeImmutable
    {
        return $this->birthdate;
    }

    /**
     * @param DateTimeImmutable|null $birthdate
     * @return $this
     */
    public function setBirthdate(?DateTimeImmutable $birthdate): self
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    /**
     * @return Gender
     */
    public function getGender(): Gender
    {
        return $this->gender;
    }

    /**
     * @param Gender $gender
     * @return $this
     */
    public function setGender( Gender $gender ): self
    {
        $this->gender = $gender;
        return $this;
    }



}