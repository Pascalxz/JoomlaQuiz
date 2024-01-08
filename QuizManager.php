<?php

class QuizManager {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createQuiz($title, $description) {
        // Creates a new quiz.
        $query = $this->db->getQuery(true);
        $query->insert($this->db->quoteName('quizzes'))
              ->columns($this->db->quoteName(array('title', 'description', 'created_at')))
              ->values(implode(',', array($this->db->quote($title), $this->db->quote($description), $this->db->quote(date('Y-m-d H:i:s')))));
        $this->db->setQuery($query);
        $this->db->execute();
    }

    public function editQuiz($id, $title, $description) {
        // Edits an existing quiz.
        $query = $this->db->getQuery(true);
        $fields = array(
            $this->db->quoteName('title') . ' = ' . $this->db->quote($title),
            $this->db->quoteName('description') . ' = ' . $this->db->quote($description),
            $this->db->quoteName('updated_at') . ' = ' . $this->db->quote(date('Y-m-d H:i:s'))
        );
        $conditions = array(
            $this->db->quoteName('id') . ' = ' . $id
        );
        $query->update($this->db->quoteName('quizzes'))->set($fields)->where($conditions);
        $this->db->setQuery($query);
        $this->db->execute();
    }

    public function deleteQuiz($id) {
        // Deletes a quiz.
        $query = $this->db->getQuery(true);
        $conditions = array(
            $this->db->quoteName('id') . ' = ' . $id
        );
        $query->delete($this->db->quoteName('quizzes'))->where($conditions);
        $this->db->setQuery($query);
        $this->db->execute();
    }

    public function customizeAppearance() {
        // Allows customization of the quiz appearance.
        // This would typically involve updating quiz settings related to appearance.
    }
}
