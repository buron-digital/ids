<?php

declare(strict_types=1);

namespace BuronDigital\Ids\ValueObject\Exception;

/**
 * @psalm-immutable
 *
 * @codeCoverageIgnore
 */
final class IdListIsEmpty extends \DomainException
{
    public function __construct()
    {
        parent::__construct('Id list is empty');
    }
}
