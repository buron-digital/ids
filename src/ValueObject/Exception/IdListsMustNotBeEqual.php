<?php

declare(strict_types=1);

namespace BuronDigital\Ids\ValueObject\Exception;

/**
 * @psalm-immutable
 *
 * @codeCoverageIgnore
 */
final class IdListsMustNotBeEqual extends \DomainException
{
    public function __construct()
    {
        parent::__construct('Id lists must not be equal');
    }
}
