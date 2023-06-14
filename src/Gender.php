<?php

namespace Maris\SymfonyBundle\PersonBundle;

enum Gender:string
{
    /**
     * Пол не определен
     */
    case UNKNOWN = "НД";

    /**
     * Мужчина
     */
    case MALE = "M";

    /**
     * Женщина
     */
    case FEMALE = "Ж";
}
