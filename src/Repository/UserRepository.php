<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\User;
use DateTimeImmutable;
use PDO;

final class UserRepository
{
    public function __construct(private PDO $database)
    {
    }

    public function create(User $user): int
    {
        $statement = $this->database->prepare(
            'INSERT INTO users (
                first_name,
                last_name,
                handle,
                email,
                password_hash,
                terms_accepted_at
            ) VALUES (
                :first_name,
                :last_name,
                :handle,
                :email,
                :password_hash,
                :terms_accepted_at
            )
            RETURNING id',
        );

        $statement->execute([
            'first_name' => $user->firstName,
            'last_name' => $user->lastName,
            'handle' => $user->handle,
            'email' => $user->email,
            'password_hash' => $user->passwordHash,
            'terms_accepted_at' => $user->termsAcceptedAt->format('Y-m-d H:i:s.uP'),
        ]);

        return (int) $statement->fetchColumn();
    }

    public function findByIdentifier(string $identifier): ?User
    {
        $statement = $this->database->prepare(
            'SELECT
                id,
                first_name,
                last_name,
                handle,
                email,
                password_hash,
                terms_accepted_at,
                created_at
            FROM users
            WHERE LOWER(email) = LOWER(:email)
                OR LOWER(handle) = LOWER(:handle)
            LIMIT 1',
        );
        $statement->execute([
            'email' => $identifier,
            'handle' => $identifier,
        ]);

        $row = $statement->fetch();
        if ($row === false) {
            return null;
        }

        return new User(
            id: (int) $row['id'],
            firstName: (string) $row['first_name'],
            lastName: (string) $row['last_name'],
            handle: (string) $row['handle'],
            email: (string) $row['email'],
            passwordHash: (string) $row['password_hash'],
            termsAcceptedAt: new DateTimeImmutable((string) $row['terms_accepted_at']),
            createdAt: new DateTimeImmutable((string) $row['created_at']),
        );
    }

    public function updatePasswordHash(int $userId, string $passwordHash): void
    {
        $statement = $this->database->prepare(
            'UPDATE users SET password_hash = :password_hash WHERE id = :id',
        );
        $statement->execute([
            'password_hash' => $passwordHash,
            'id' => $userId,
        ]);
    }
}
