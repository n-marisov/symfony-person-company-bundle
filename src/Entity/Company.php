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
    private ?int $id;

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
     * @var Collection<User>
     */
    private Collection $trustedPersons;
}