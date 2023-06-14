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
}