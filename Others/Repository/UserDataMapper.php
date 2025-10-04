<?php

namespace Others\Repository;

class UserDataMapper
{
    /**
     * Maps a User object to an associative array containing the user's data.
     *
     * @param User $user The User object to be mapped.
     *
     * @return array An associative array containing the user's data.
     */
    public static function domainToData(User $user): array
    {
        return [
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword()
        ];
    }

    /**
     * Maps an associative array containing user data to a User object.
     *
     * @param array $data An associative array containing the user's data.
     *
     * @return User A User object containing the mapped data.
     */
    public static function dataToDomain(array $data): User
    {
        $user = new User();
        return  $user->setEmail($data['email'])
            ->setName($data['name'])
            ->setPassword($data['password']);
    }
}
