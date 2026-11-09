<?php

declare(strict_types=1);

namespace App\Model;

use DateTimeImmutable;

final readonly class User
{
    public function __construct(
        public ?int $id,
        public string $firstName,
        public string $lastName,
        public string $handle,
        public string $email,
        public string $passwordHash,
        public DateTimeImmutable $termsAcceptedAt,
        public ?DateTimeImmutable $createdAt = null,
        public string $description = '',
        public string $city = '',
    ) {
    }
}
