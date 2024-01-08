<?php

class QuestionManager {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function addQuestion($quiz_id, $question_text, $question_type) {
        // Adds a new question to a quiz.
        $query = $this->db->getQuery(true);
        $query->insert($this->db->quoteName('questions'))
              ->columns($this->db->quoteName(array('quiz_id', 'question_text', 'question_type', 'created_at')))
              ->values(implode(',', array($this->db->quote($quiz_id), $this->db->quote($question_text), $this->db->quote($question_type), $this->db->quote(date('Y-m-d H:i:s')))));
        $this->db->setQuery($query);
        $this->db->execute();
    }

    public function editQuestion($id, $question_text, $question_type) {
        // Edits an existing question.
        $query = $this->db->getQuery(true);
        $fields = array(
            $this->db->quoteName('question_text') . ' = ' . $this->db->quote($question_text),
            $this->db->quoteName('question_type') . ' = ' . $this->db->quote($question_type),
            $this->db->quoteName('updated_at') . ' = ' . $this->db->quote(date('Y-m-d H:i:s'))
        );
        $conditions = array(
            $this->db->quoteName('id') . ' = ' . $id
        );
        $query->update($this->db->quoteName('questions'))->set($fields)->where($conditions);
        $this->db->setQuery($query);
        $this->db->execute();
    }

    public function deleteQuestion($id) {
        // Deletes a question.
        $query = $this->db->getQuery(true);
        $conditions = array(
            $this->db->quoteName('id') . ' = ' . $id
        );
        $query->delete($this->db->quoteName('questions'))->where($conditions);
        $this->db->setQuery($query);
        $this->db->execute();
    }

    public function addMedia($question_id, $media_type, $media_path) {
        // Adds media to a question.
        // This method would involve storing media information in the database and linking it to the question.
    }

    public function trackRevisions() {
        // Tracks revisions of questions.
        // This method would involve keeping a history of changes to questions.
    }
}
