<?php


namespace App\DBAL\Types;


use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

/**
 * Пол
 *
 * @package App\DBAL
 */
class GenderType extends AbstractEnumType
{
    public const
        MAN     = 'man',
        WOMAN   = 'woman';

    protected static $choices = [
        self::MAN   => self::MAN,
        self::WOMAN => self::WOMAN,
    ];
}