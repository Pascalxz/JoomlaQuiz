<?php

class CategoryManager {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function addCategory($name, $description) {
        // Adds a new category.
        $query = $this->db->getQuery(true);
        $query->insert($this->db->quoteName('categories'))
              ->columns($this->db->quoteName(array('name', 'description', 'created_at')))
              ->values(implode(',', array($this->db->quote($name), $this->db->quote($description), $this->db->quote(date('Y-m-d H:i:s')))));
        $this->db->setQuery($query);
        $this->db->execute();
    }

    public function editCategory($id, $name, $description) {
        // Edits an existing category.
        $query = $this->db->getQuery(true);
        $fields = array(
            $this->db->quoteName('name') . ' = ' . $this->db->quote($name),
            $this->db->quoteName('description') . ' = ' . $this->db->quote($description),
            $this->db->quoteName('updated_at') . ' = ' . $this->db->quote(date('Y-m-d H:i:s'))
        );
        $conditions = array(
            $this->db->quoteName('id') . ' = ' . $id
        );
        $query->update($this->db->quoteName('categories'))->set($fields)->where($conditions);
        $this->db->setQuery($query);
        $this->db->execute();
    }

    public function deleteCategory($id) {
        // Deletes a category.
        $query = $this->db->getQuery(true);
        $conditions = array(
            $this->db->quoteName('id') . ' = ' . $id
        );
        $query->delete($this->db->quoteName('categories'))->where($conditions);
        $this->db->setQuery($query);
        $this->db->execute();
    }
}
