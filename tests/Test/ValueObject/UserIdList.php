<?php

declare(strict_types=1);

namespace BuronDigital\Ids\Test\ValueObject;

use BuronDigital\Ids\ValueObject\IdList;

/**
 * @extends IdList<UserId>
 */
final readonly class UserIdList extends IdList
{
    #[\Override]
    public static function handlesIdClass(): string
    {
        return UserId::class;
    }
}
