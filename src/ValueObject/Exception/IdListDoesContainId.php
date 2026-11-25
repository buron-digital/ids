<?php

declare(strict_types=1);

namespace BuronDigital\Ids\ValueObject\Exception;

use BuronDigital\Ids\ValueObject\Id;

/**
 * @psalm-immutable
 *
 * @codeCoverageIgnore
 */
final class IdListDoesContainId extends \DomainException
{
    public function __construct(Id $id)
    {
        parent::__construct(sprintf('List does contain id %s', (string) $id));
    }
}
