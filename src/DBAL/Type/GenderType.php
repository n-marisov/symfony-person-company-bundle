<?php

namespace Maris\SymfonyBundle\PersonBundle\DBAL\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;
use Exception;
use Maris\SymfonyBundle\PersonBundle\Gender;

class GenderType extends Type
{
    /**
     * @inheritDoc
     */
    public function getSQLDeclaration(array $column, AbstractPlatform $platform):string
    {
        $names = [];
        foreach (Gender::cases() as $status){
            $names[] = "'$status->value'";
        }
        $types = implode(", ", $names );
        return "ENUM( $types )";
    }

    /**
     * @inheritDoc
     */
    public function getName():string
    {
        return "gender";
    }
    public function canRequireSQLConversion():bool
    {
        return true;
    }

    /**
     * @throws Exception
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform ):string
    {
        dump($value);
        if(!is_a($value,Gender::class))
            throw new Exception("Значение не является объектом ".Gender::class);
        return $value->value;
    }

    /**
     * @param $value
     * @param AbstractPlatform $platform
     * @return Gender|null
     */
    public function convertToPHPValue($value, AbstractPlatform $platform):?Gender
    {
        return Gender::tryFrom($value);
    }
}