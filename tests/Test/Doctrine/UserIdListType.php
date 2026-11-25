<?php

declare(strict_types=1);

namespace BuronDigital\Ids\Test\Doctrine;

use BuronDigital\Ids\Test\ValueObject\UserIdList;
use BuronDigital\SelfAwareNormalizers\Doctrine\ArrayNormalizableType;

final class UserIdListType extends ArrayNormalizableType
{
    #[\Override]
    public static function getTypeName(): string
    {
        return 'user_id_list';
    }

    #[\Override]
    public static function getClass(): string
    {
        return UserIdList::class;
    }
}
