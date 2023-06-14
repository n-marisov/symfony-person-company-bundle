<?php

namespace Maris\SymfonyBundle\PersonBundle\Entity;

use DateTimeImmutable;
use libphonenumber\PhoneNumber;

class Person
{
    private ?int $id = null;

    private ?User $user = null;

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
     * @var string
     */
    private string $gender;
}