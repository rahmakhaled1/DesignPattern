<?php

namespace Others\Repository;

class UserRepository extends EntityRepository implements UserRepositoryInterface
{
    public function __construct(private PersistenceInterface $persistence,  private UserDataMapper $dataMapper)
    {
        parent::__construct(User::class);
    }

    public function find(int $id): User
    {
        return $this->dataMapper::dataToDomain($this->persistence->retrieve($id));
    }

    public function save(User $user): bool
    {
        $userData = $this->dataMapper::domainToData($user);
        $this->persistence->persist($userData);
        return true;
    }

    public function delete(int $id): bool
    {
        $this->persistence->delete($id);
        return  true;
    }
}
