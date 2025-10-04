<?php

namespace Others\Repository;

/**
 * @property string $name
 * @property string $email
 * @property string $password
 */
class User
{

    private string $name;
    private string $email;
    private string $password;

    /**
     * Retrieves the user's name.
     *
     * @return string The user's name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets the user's name.
     *
     * @param string $name The user's name.
     *
     * @return User The current User instance.
     */
    public function setName(string $name): User
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Retrieves the user's email address.
     *
     * @return string The user's email address.
     */
    public function getEmail(): string
    {
        return $this->email;
    }



    /**
     * Sets the user's email address.
     *
     * @param string $email The user's email address.
     *
     * @return User The current User instance.
     */
    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Returns the user's password.
     *
     * @return string The user's password.
     */

    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * Sets the user's password.
     *
     * @param string $password The user's password.
     *
     * @return User The current User instance.
     */
    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }
}
