<?php

declare(strict_types=1);

namespace BuronDigital\Ids\ValueObject\Exception;

use BuronDigital\Ids\ValueObject\Id;

/**
 * @psalm-immutable
 *
 * @codeCoverageIgnore
 */
final class IdAlreadyInList extends \DomainException
{
    public function __construct(Id $id)
    {
        parent::__construct(sprintf('The id %s is already in the list', (string) $id));
    }
}
