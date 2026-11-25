<?php

declare(strict_types=1);

namespace BuronDigital\Ids\Test\Doctrine;

use BuronDigital\Ids\Doctrine\IdType;
use BuronDigital\Ids\Test\ValueObject\UserId;

final class UserIdType extends IdType
{
    #[\Override]
    public static function getTypeName(): string
    {
        return 'user_id';
    }

    #[\Override]
    public static function getClass(): string
    {
        return UserId::class;
    }
}
