<?php

namespace Others\Repository;

class ArrayEntityManager implements PersistenceInterface
{
    public function __construct(private array $db){}

    /**
     * Saves the given data to the internal database.
     *
     * @param array $data The data to be saved.
     *
     * @return void
     */
    public function persist(array $data)
    {
        $this->db[] = $data;
    }

    /**
     * Retrieves the data associated with the given id from the internal database.
     *
     * If the id does not exist in the database, an empty array is returned.
     *
     * @param int $id The id of the data to be retrieved.
     *
     * @return array The data associated with the given id, or an empty array if the id does not exist.
     */
    public function retrieve(int $id): array
    {
        return $this->db[$id] ?? [];
        
    }
    /**
     * Deletes the data associated with the given id from the internal database.
     *
     * @param int $id The id of the data to be deleted.
     *
     * @return void
     */
    public function delete(int $id)
    {
        unset($this->db[$id]);
    }

}