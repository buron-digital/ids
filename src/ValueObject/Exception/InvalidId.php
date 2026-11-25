<?php

declare(strict_types=1);

namespace BuronDigital\Ids\ValueObject\Exception;

/**
 * @psalm-immutable
 *
 * @codeCoverageIgnore
 */
final class InvalidId extends \InvalidArgumentException
{
    public function __construct(string $id)
    {
        parent::__construct(sprintf('The id %s is invalid', $id));
    }
}
