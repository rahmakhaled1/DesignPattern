<?php

namespace Others\Repository;

/**
 * Interface for user repository operations.
 */
interface UserRepositoryInterface
{
    public function find(int $id): ?User;   
    public function save(User $user): bool;
    public function delete(int $id): bool;
}
